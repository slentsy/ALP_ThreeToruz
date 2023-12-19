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

// homepage
Route::get('/', function () {
    return view('homepage', 
        [
            "pagetitle" => "Homepage",
            "maintitle" => "Homepage"
        ]
    );
});

// product
Route::get('product', function () {
    return view('product');
});

// promo
Route::get('promo', function () {
    return view('promo');
});

// article
Route::get('article', function () {
    return view('article');
});

// about us
Route::get('aboutUs', function () {
    return view('aboutUs');
});
