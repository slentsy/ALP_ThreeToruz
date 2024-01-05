<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MessageController;

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



//homepage
Route::get('/', function () {
    return view('home page/homepage', [
        "pagetitle" => "Homepage",
        "maintitle" => "Homepage",
        "banners" => Banner::all(),
    ]);
});


// about us
Route::get('aboutUs', function () {
    return view('about page/aboutUs',
        [
            "pagetitle" => "About Us🤗",
        ]
    );
});


// article
Route::get('article', function () {
    return view('article page/article',
        [
            "pagetitle" => "Read Me📖",
        ]
    );
});

//banner feature


Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
//Route::get('/banner/edit/{banner}', [BannerController::class, 'edit'])->name('banner.edit');
//Route::put('/banner/update/{banner}', [BannerController::class, 'update'])->name('banner.update');
Route::delete('/banner_destroy/{banner}', [BannerController::class, 'destroy'])->name('banner_destroy');
Route::get('/banner_edit/{banner}', [BannerController::class,'edit'])->name('banner_edit');
Route::put('/banner_update/{banner}', [BannerController::class,'update'])->name('banner_update');
Route::get('/banner_view',[BannerController::class,'show'])->name('banner_view');


//route for message (in contact page)
Route::get('contact', [MessageController::class, 'index'])->name('contact');

//homepage banner feature
//Route::get('/index', [BannerController::class, 'index'])->name('index');

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

// product
Route::get('productDetail', function () {
    return view('product page/detail',
        [
            "pagetitle" => "Product Detail🍩",
        ]
    );
});


// promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo');

