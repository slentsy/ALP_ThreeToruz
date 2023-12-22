<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PromoController;
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

// about us
Route::get('aboutUs', function () {
    return view('about page/aboutUs');
});

// article
Route::get('article', function () {
    return view('article page/article');
});

// contact us
Route::get('contact', function () {
    return view('contact page/contact');
});
Route::get('contact', [MessageController::class, 'index'])->name('contact');
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');



// product
Route::get('product', function () {
    return view('product page/product',
        [
            "pagetitle" => "Our Product🍩",
        ]
    );
});

// promo
Route::get('promo', function () {
    return view('promo page/promo');
});