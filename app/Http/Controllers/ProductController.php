<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function create()
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'desc' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image',
        ]);

        // Create a new product
        $product = new Product();

        // Set the product's attributes
        $product->name = $request->post('name');
        $product->desc = $request->post('desc');
        $product->price = $request->post('price');

        // If an image was uploaded, save it to the database
        if ($request->hasFile('image')) {
            $product->image = file_get_contents($request->file('image')->path());
        }

        // Save the product to the database
        $product->save();

        // Redirect to the products index page
        return redirect()->route('products.index');
    }
    public function show($code)
    {
        $product = Product::where('id', $code)->first();
        if ($product) {
            return view('detailed-view', ['product' => $product]);
        } else {
            return 'No Product';
        }
    }
    public function returnProduct()
    {
        $product = Product::all();
        return view('menu', ['title' => 'Our Menu', 'products' => $product]);
    }
}
