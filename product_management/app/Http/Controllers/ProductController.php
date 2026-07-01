<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

        'category' => 'required|string|max:255',

        'stock' => 'required|integer|min:0',

        'colors' => 'required|array',
        'colors.*' => 'string',

        'sizes' => 'required|array',
        'sizes.*' => 'string',

        'status' => 'required|in:active,inactive',

        'image' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:2048',

    ]);

    DB::beginTransaction();

    try {

        // Default Image
        $imageName = 'default.jpg';

        // Upload Image
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time().'_'.$image->getClientOriginalName();

            $image->move(
                public_path('uploads/products'),
                $imageName
            );

        }

        Product::create([

            'name' => $validatedData['name'],

            'slug' => Str::slug($validatedData['name']).'-'.time(),

            'price' => $validatedData['price'],

            'description' => $validatedData['description'],

            'brand' => $validatedData['brand'],

            'category' => $validatedData['category'],

            'stock' => $validatedData['stock'],

            'colors' => $validatedData['colors'],

            'sizes' => $validatedData['sizes'],

            'status' => $validatedData['status'],

            'image' => $imageName,

        ]);

        DB::commit();

        return redirect()
                ->route('product.home')
                ->with(
                    'success',
                    'Product added successfully.'
                );

    } catch (\Exception $e) {

        DB::rollBack();

        return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );

    }
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

        'category' => 'required|string|max:255',

        'stock' => 'required|integer|min:0',

        'colors' => 'required|array',
        'colors.*' => 'string',

        'sizes' => 'required|array',
        'sizes.*' => 'string',

        'status' => 'required|in:active,inactive',

        'image' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:2048',

    ]);

    DB::beginTransaction();

    try {

        $product = Product::findOrFail($id);

        $imageName = $product->image;

        // Upload New Image
        if ($request->hasFile('image')) {

            // Delete Old Image
            if (
                $product->image != 'default.jpg' &&
                File::exists(public_path('uploads/products/'.$product->image))
            ) {

                File::delete(
                    public_path('uploads/products/'.$product->image)
                );

            }

            $image = $request->file('image');

            $imageName = time().'_'.$image->getClientOriginalName();

            $image->move(
                public_path('uploads/products'),
                $imageName
            );

        }

        $product->update([

            'name' => $validatedData['name'],

            'slug' => Str::slug($validatedData['name']).'-'.time(),

            'price' => $validatedData['price'],

            'description' => $validatedData['description'],

            'brand' => $validatedData['brand'],

            'category' => $validatedData['category'],

            'stock' => $validatedData['stock'],

            'colors' => $validatedData['colors'],

            'sizes' => $validatedData['sizes'],

            'status' => $validatedData['status'],

            'image' => $imageName,

        ]);

        DB::commit();

        return redirect()
                ->route('product.home')
                ->with(
                    'success',
                    'Product updated successfully.'
                );

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );

    }
}

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.home')->with('success', 'Product deleted successfully.');
    }
}
