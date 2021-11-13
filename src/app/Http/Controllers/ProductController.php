<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function store(array $params): RedirectResponse
    {
        Product::create([
            'name' => $params['supplies_name'],
            'substance_id' => $params['supplies_substance'],
            'manufacturer_id' => $params['supplies_manufacturer'],
            'price' => $params['supplies_price'],
        ]);
        return  redirect(route('home'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $medicineId = filter_var($request->input('medicineId', FILTER_SANITIZE_NUMBER_INT));
        Product::destroy((int)$medicineId);

        return  redirect(route('home'));
    }

    public function update(Request $request): JsonResponse
    {
        if (!is_numeric($request->id)) {
            return response()->json('Not found', 404);
        }

        $validated = $request->validate([
            'name' => 'string|max:255',
            'substance_id' => 'numeric|exists:substances,id',
            'manufacturer_id' => 'numeric|exists:manufacturers,id',
            'price' => 'numeric',
        ]);

        if (Product::findOrFail($request->id)->update($validated)) {
            return response()->json('Success', 201);
        }
    }
}
