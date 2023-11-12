<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\StoreReviews;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories', ['categories' => $categories]);
    }

    public function create()
    {
        return view('create-category');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'coverimg' => 'required|string',
            'logo' => 'required|string',
            'desc' => 'required|string',
        ]);

        // Create a new product
        $category = new Category();

        // Set the category's attributes
        $category->name = $request->post('name');
        $category->coverimg = $request->post('coverimg');
        $category->logo = $request->post('logo');
        $category->desc = $request->post('desc');

        // Save the category to the database
        $category->save();

        // Redirect to the categories index page
        return redirect()->route('categories.index');
    }
    public function show($code)
    {
        $category = category::where('id', $code)->first();
        if ($category) {
            return view('detailed-view', ['category' => $category]);
        } else {
            return 'No Category';
        }
    }
    public function returnCategory()
    {
        $category = Category::all();
        $storeReview = StoreReviews::all();
        $branch = Branch::all();
        return view('welcome', ['title' => 'Home', 'categories' => $category, 'storereviews' => $storeReview, 'branches' => $branch]);
    }
}
