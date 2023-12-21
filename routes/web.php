<?php

<<<<<<< HEAD
use App\Http\Controllers\MessageController;
=======
use App\Http\Controllers\PromoController;
>>>>>>> origin/sophia
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

<<<<<<< HEAD
// about us
Route::get('aboutUs', function () {
    return view('about page/aboutUs');
=======
// product
Route::get('product', function () {
    return view('product',
        [
            "pagetitle" => "Our Product🍩",
        ]
    );
});

// promo
Route::get('promo', function () {
    return view('promo',
        [
            "pagetitle" => "Sale📢",
        ]
    );
>>>>>>> origin/sophia
});

Route::get('/promo', [PromoController::class, 'index'])->name('promo');

// akhir promo

// article
Route::get('article', function () {
<<<<<<< HEAD
    return view('article page/article');
});

// contact us
Route::get('contact', function () {
    return view('contact page/contact');
=======
    return view('article',
        [
            "pagetitle" => "Read Me📖",
        ]
    );
});

// about us
Route::get('aboutUs', function () {
    return view('aboutUs',
        [
            "pagetitle" => "About Us🤗",
        ]
    );
>>>>>>> origin/sophia
});
Route::get('contact', [MessageController::class, 'index'])->name('contact');
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');



// product
Route::get('product', function () {
    return view('product page/product');
});

// promo
Route::get('promo', function () {
    return view('promo page/promo');
});