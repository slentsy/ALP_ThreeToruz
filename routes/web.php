<?php

use App\Http\Controllers\ArticleController;
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
    return view('about page/aboutUs',
        [
            "pagetitle" => "About Us🤗",
        ]
    );
});



// ambil data article
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/create', [ArticleController::class, 'create']);
Route::post('/article/store', [ArticleController::class, 'store']);
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
            "pagetitle" => "Our Product🍩",
        ]
    );
});


// promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo');