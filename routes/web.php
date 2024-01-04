<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;

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
    return view('about page/aboutUs',
        [
            "pagetitle" => "About Us🤗",
        ]
    );
});

// ambil data article
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
// akhir dari article 


//route for message (in contact page) logics
Route::get('contact', [MessageController::class, 'index'])->name('contact');
Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');
// akhir message

// product
Route::get('product', function () {
    return view('product page/product',
        [
            "pagetitle" => "About Us🤗",
        ]
    );
});



// promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo'); //PROMONYA TADI KEDOUBLE
Route::resource('promos', PromoController::class)->middleware('auth');
//LAINNYA CUMA MENGATUR ROUTE NYA DENGAN TERURUT SESUAI ABJAD


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
