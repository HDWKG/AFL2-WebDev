<?php

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
Route::get('/menu', function () {
    return view('menu', [
        "title" => "Our Menu",
    ]);
});
Route::get('/book', function () {
    return view('book', [
        "title" => "Book Now!",
    ]);
});
