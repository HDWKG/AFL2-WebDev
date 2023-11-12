<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function show($code)
    {
        $product = Product::where('id', $code)->first();

        if ($product) {
            $allReviews = Reviews::all();
            $relatedProducts = Product::inRandomOrder()
                ->where('id', '!=', $code)
                ->limit(4)
                ->get();
            return view('detailed-view', [
                'product' => $product,
                'product1' => $relatedProducts->get(0),
                'product2' => $relatedProducts->get(1),
                'product3' => $relatedProducts->get(2),
                'product4' => $relatedProducts->get(3),
                'reviews' => $allReviews
            ]);
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
