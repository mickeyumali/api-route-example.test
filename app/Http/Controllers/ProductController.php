<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Mango',
            'description' => 'masarap maganda sa kalusugan',
        ],
        [
            'id' => 2,
            'name' => 'Apple',
            'description' => 'masarap maganda sa kalusugan',
        ],
        [
            'id' => 3,
            'name' => 'Orange',
            'description' => 'Cravings ko ngayon',
        ],
        
    ];
    //
    public function index()
    {
        return response()->json(['message' => 'Display all products', 'products' => $this->products]);
    }

    public function store(Request $request)
    {
        // Implement storing logic here
        return response()->json(['message' => 'Product created successfully']);
    }

    public function show($id)
    {
       // Find the product with the provided ID in the $products array
       $product = collect($this->products)->firstWhere('id', $id);

       // If the product does not exist, return a 404 response
       if (!$product) {
           return response()->json(['message' => 'Product not found'], 404);
       }

       // Return a JSON response with the product
       return response()->json(['message' => "Display product with ID: $id", 'product' => $product]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => 'New product added successfully']);
    }

    public function destroy($id)
    {
        // Implement deletion logic here
        return response()->json(['message' => "Product with ID: $id deleted successfully"]);
    }
}
