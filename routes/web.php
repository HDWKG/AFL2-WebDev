<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
    ]);
});
Route::get("/test", function () {
    return view('test');
});
Route::get("/book", [BranchController::class,"returnBranch"])->name("");
Route::get("/menu", [ProductController::class, "returnProduct"])->name("");
Route::get("/",[CategoryController::class, 'returnCategory'])->name("");
Route::get('/menuDetails/{id}', [ProductController::class, 'show'])->name('viewProduct');
