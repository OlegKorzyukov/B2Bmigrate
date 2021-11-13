<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function store(array $params): RedirectResponse
    {
        Category::create([
            'name' => $params['supplies_name'],
            'link' => $params['supplies_link'],
        ]);
        return  redirect(route('home'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $manufactureId = filter_var($request->input('manufactureId', FILTER_SANITIZE_NUMBER_INT));
        Category::destroy((int)$manufactureId);

        return  redirect(route('home'));
    }

    public function update(Request $request): JsonResponse
    {
        if (!is_numeric($request->id)) {
            return response()->json('Not found', 404);
        }

        $validated = $request->validate([
            'name' => 'string|max:255',
            'link' => 'string'
        ]);

        if (Category::findOrFail($request->id)->update($validated)) {
            return response()->json('Success', 201);
        }
    }
}
