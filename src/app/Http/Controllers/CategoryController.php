<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $limit = (int) $request->get('limit') ?? 10;

        return Category::paginate($limit);
    }

    public function store(Request $request): JsonResponse
    {
        //TODO: validation
       $category = Category::create($request->all());

        return new JsonResponse($category);
    }

    public function show(int $id)
    {
         return Category::findOrFail($id);
    }

    public function update(Request $request, $id): JsonResponse
    {
        //TODO: validation
       Category::findOrFail($id)->update($request->all());

        return new JsonResponse(Category::find($id));
    }

    public function destroy(int $id)
    {
        $destroyCategory = Category::find($id);
        Category::destroy($id);

        return  new JsonResponse($destroyCategory);
    }
}
