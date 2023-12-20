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
    return view('home page/homepage', 
        [
            "pagetitle" => "Homepage",
            "maintitle" => "Homepage"
        ]
    );
});

// product
Route::get('product', function () {
    return view('product page/product');
});

// promo
Route::get('promo', function () {
    return view('promo page/promo');
});

// article
Route::get('article', function () {
    return view('article page/article');
});

// about us
Route::get('aboutUs', function () {
    return view('about page/aboutUs');
});

// contact us
Route::get('contact', function () {
    return view('contact page/contact');
});
