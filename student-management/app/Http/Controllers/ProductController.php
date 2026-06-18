<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //products array
    private function getProducts(){

    return [
    [
        "id" => 1,
        "name" => "Classic T-Shirt",
        "price" => 499,
        "description" => "Comfortable cotton t-shirt for everyday wear.",
        "colors" => ["Black", "White", "Navy Blue", "Red"],
        "sizes" => ["S", "M", "L", "XL"]
    ],
    [
        "id" => 2,
        "name" => "Slim Fit Jeans",
        "price" => 1299,
        "description" => "Stylish slim-fit denim jeans.",
        "colors" => ["Blue", "Black", "Grey"],
        "sizes" => ["30", "32", "34", "36"]
    ],
    [
        "id" => 3,
        "name" => "Sports Shoes",
        "price" => 2499,
        "description" => "Lightweight running shoes with cushioned sole.",
        "colors" => ["White", "Black", "Red"],
        "sizes" => ["7", "8", "9", "10"]
    ],
    [
        "id" => 4,
        "name" => "Leather Wallet",
        "price" => 799,
        "description" => "Premium leather wallet with multiple compartments.",
        "colors" => ["Brown", "Black"],
        "sizes" => ["Standard"]
    ],
    [
        "id" => 5,
        "name" => "Casual Hoodie",
        "price" => 1499,
        "description" => "Warm and comfortable hoodie for winter.",
        "colors" => ["Grey", "Black", "Blue"],
        "sizes" => ["M", "L", "XL"]
    ],
    [
        "id" => 6,
        "name" => "Smart Watch",
        "price" => 3999,
        "description" => "Smart watch with fitness tracking features.",
        "colors" => ["Black", "Silver", "Gold"],
        "sizes" => ["40mm", "44mm"]
    ],
    [
        "id" => 7,
        "name" => "Backpack",
        "price" => 999,
        "description" => "Durable backpack suitable for travel and college.",
        "colors" => ["Black", "Navy Blue", "Grey"],
        "sizes" => ["Medium", "Large"]
    ],
    [
        "id" => 8,
        "name" => "Formal Shirt",
        "price" => 899,
        "description" => "Elegant formal shirt for office wear.",
        "colors" => ["White", "Sky Blue", "Pink"],
        "sizes" => ["M", "L", "XL", "XXL"]
    ],
    [
        "id" => 9,
        "name" => "Wireless Earbuds",
        "price" => 1999,
        "description" => "Bluetooth earbuds with noise cancellation.",
        "colors" => ["Black", "White", "Blue"],
        "sizes" => ["Standard"]
    ],
    [
        "id" => 10,
        "name" => "Sunglasses",
        "price" => 699,
        "description" => "UV-protected stylish sunglasses.",
        "colors" => ["Black", "Brown", "Blue"],
        "sizes" => ["Standard"]
    ],
    [
        "id" => 11,
        "name" => "Polo T-Shirt",
        "price" => 799,
        "description" => "Premium polo t-shirt with soft fabric.",
        "colors" => ["Maroon", "Black", "White", "Green"],
        "sizes" => ["S", "M", "L", "XL"]
    ],
    [
        "id" => 12,
        "name" => "Laptop Bag",
        "price" => 1199,
        "description" => "Water-resistant laptop bag for 15-inch laptops.",
        "colors" => ["Grey", "Black", "Blue"],
        "sizes" => ["13 Inch", "15 Inch", "17 Inch"]
    ],
    [
        "id" => 13,
        "name" => "Bluetooth Speaker",
        "price" => 1799,
        "description" => "Portable speaker with deep bass sound.",
        "colors" => ["Red", "Black", "Blue"],
        "sizes" => ["Mini", "Standard"]
    ],
    [
        "id" => 14,
        "name" => "Track Pants",
        "price" => 699,
        "description" => "Comfortable track pants for workouts.",
        "colors" => ["Dark Grey", "Black", "Navy Blue"],
        "sizes" => ["S", "M", "L", "XL"]
    ],
    [
        "id" => 15,
        "name" => "Winter Jacket",
        "price" => 2999,
        "description" => "Insulated winter jacket for cold weather.",
        "colors" => ["Olive Green", "Black", "Grey", "Brown"],
        "sizes" => ["M", "L", "XL", "XXL"]
    ]
];

     
    }

    //products index
    public function index()
    {
        $products = $this->getProducts();

        return view('products.index', compact('products'));
    }

    //show products
    public function show($id)
    {
        $products = $this->getProducts();

        $product = collect($products)->firstWhere('id', $id);

        return view('products.show', compact('product'));
    }




   
}
