<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Get all category
     *
     * @Response(
     *    code: 200
     *    ref: Category
     * )
     */
    public function index(Request $request)
    {
        $limit = (int) $request->get('limit') ?? 10;

        return Category::paginate($limit);
    }

    /**
     * Save single category
     *
     * @Response(
     *    code: 200
     *    ref: Category
     * )
     */
    public function store(Request $request): JsonResponse
    {
        //TODO: validation
       $category = Category::create($request->all());

        return new JsonResponse($category);
    }

    /**
     * Show single category
     *
     * @Response(
     *    code: 200
     *    ref: Category
     * )
     */
    public function show(int $id)
    {
         return Category::findOrFail($id);
    }

    /**
     * Update single category
     *
     * @Response(
     *    code: 200
     *    ref: Category
     * )
     */
    public function update(Request $request, $id): JsonResponse
    {
        //TODO: validation
       Category::findOrFail($id)->update($request->all());

        return new JsonResponse(Category::find($id));
    }

    /**
     * Destroy single category
     *
     * @Response(
     *    code: 200
     *    ref: Category
     * )
     */
    public function destroy(int $id): JsonResponse
    {
        $destroyCategory = Category::find($id);
        Category::destroy($id);

        return  new JsonResponse($destroyCategory);
    }
}
