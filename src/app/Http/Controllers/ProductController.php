<?php

namespace App\Http\Controllers;

use App\Http\DTO\ProductDTO;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $limit = (int)$request->get('limit') ?? 10;

        return new JsonResponse(
            Product::paginate($limit)->map(
                    function (Product $product) {
                        $productDto = new ProductDTO();
                        $productDto->productId = $product->id;
                        $productDto->attributes = $product->attributeProduct()->get();
                        $productDto->categories = $product->category()->get();

                        return $productDto;
                    }
                )
        );
    }

    public function store(Request $request): JsonResponse
    {
        //TODO: validation
        $category = Product::create($request->all());

        return new JsonResponse($category);
    }

    public function show(int $id): JsonResponse
    {
        return new JsonResponse(Product::findOrFail($id));
    }

    public function update(Request $request, $id): JsonResponse
    {
        //TODO: validation
        Product::findOrFail($id)->update($request->all());

        return new JsonResponse(Product::find($id));
    }

    public function destroy(int $id): JsonResponse
    {
        $destroyCategory = Product::find($id);
        Product::destroy($id);

        return  new JsonResponse($destroyCategory);
    }
}
