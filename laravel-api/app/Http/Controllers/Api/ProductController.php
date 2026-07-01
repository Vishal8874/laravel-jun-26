<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function hello()
    {
        return response()->json([
            'message' => 'Hello from Product Controller',
        ]);
    }

    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function store(StoreProductRequest $request)
    {
        // $product = Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'stock' => $request->stock,
        //     'description' => $request->description,
        // ]);

        $product = Product::create($request->validated());

        return response()->json(
            [
                'message' => 'Product created successfully',
                'data' => $product,
            ],
            201,
        );
    }

    public function show(Product $product)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(
                [
                    'message' => 'Product not found',
                ],
                404,
            );
        }

        return response()->json($product);
    }

    // public function show(Product $product)
    // {
    //     return response()->json($product);
    // }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Product updated successfully.',
            'data' => $product,
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully.',
        ]);
    }
}
