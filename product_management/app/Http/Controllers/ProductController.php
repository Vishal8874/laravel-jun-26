<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('home', compact('products'));
    }

    public function create()
    {
        return view('add-product');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',

            'price' => 'required|numeric|min:1',

            'description' => 'required|string',

            'brand' => 'required|string|max:255',

            'stock' => 'required|integer|min:0',
        ]);

        Product::create($validatedData);

        return redirect()->route('product.home')->with('success', 'Product added successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',

            'price' => 'required|numeric|min:1',

            'description' => 'required|string',

            'brand' => 'required|string|max:255',

            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);

        $product->update($validatedData);

        return redirect()->route('product.home')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.home')->with('success', 'Product deleted successfully.');
    }
}
