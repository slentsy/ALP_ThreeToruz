<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleProdukController;
use App\Http\Controllers\LocTimeController;
use App\Models\Article;
use App\Models\Category;
use App\Models\LocTime;
use App\Models\Promo;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;

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



//homepage (without middleware)
Route::get('/', function () {
    $highlights = Produk::where('highlights_produk', true)->get();
    //$promo = Promo::find(1);
    return view('home page/homepage', [
        "pagetitle" => "Homepage",
        "maintitle" => "Homepage",
        "banners" => Banner::all(),
        //"promos" => $promo,
        "locTimes"=> LocTime::all(),
        'highlights' => $highlights
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
            "articles"=> Article::all()
        ]
    );
});

//article feature
Route::delete('/article_destroy/{article}', [ArticleController::class, 'destroy'])->middleware('auth')->name('article_destroy');
Route::get('/article_edit/{article}', [ArticleController::class,'edit'])->middleware('auth')->name('article_edit');
Route::post('/article_store', [ArticleController::class, 'store'])->middleware('auth')->name('article_store');
Route::put('/article_update/{article}', [ArticleController::class,'update'])->middleware('auth')->name('article_update');
Route::get('article_view',[ArticleController::class,'show'])->middleware('auth')->name('article_view');

//banner feature
Route::post('/banner/store', [BannerController::class, 'store'])->middleware('auth')->name('banner.store');
//Route::get('/banner/edit/{banner}', [BannerController::class, 'edit'])->name('banner.edit');
//Route::put('/banner/update/{banner}', [BannerController::class, 'update'])->name('banner.update');
Route::delete('/banner_destroy/{banner}', [BannerController::class, 'destroy'])->middleware('auth')->name('banner_destroy');
Route::get('/banner_edit/{banner}', [BannerController::class,'edit'])->middleware('auth')->name('banner_edit');
Route::put('/banner_update/{banner}', [BannerController::class,'update'])->middleware('auth')->name('banner_update');
Route::get('/banner_view',[BannerController::class,'show'])->middleware('auth')->name('banner_view');

//category feature CRUD
Route::delete('/category_destroy/{category}', [CategoryController::class, 'destroy'])->middleware('auth')->name('category_destroy');
Route::get('/category_edit/{category}', [CategoryController::class,'edit'])->middleware('auth')->name('category_edit');
Route::post('/category_store', [CategoryController::class, 'store'])->middleware('auth')->name('category_store');
Route::put('/category_update/{category}', [CategoryController::class,'update'])->middleware('auth')->name('category_update');
Route::get('category_view',[CategoryController::class,'show'])->middleware('auth')->name('category_view');

//route for message (in contact page)
Route::get('contact', [MessageController::class, 'index'])->name('contact');

//articleproduk feature
Route::delete('/funfact_destroy/{articleProduk}', [ArticleProdukController::class, 'destroy'])->middleware('auth')->name('funfact_destroy');
Route::post('/funfact_store', [ArticleProdukController::class, 'store'])->middleware('auth')->name('funfact_store');
Route::get('funfact_view',[ArticleProdukController::class,'show'])->middleware('auth')->name('funfact_view');

//middleware
//homepage (with middleware)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//location and operational hour feature
Route::delete('/locTime_destroy/{locTime}', [LocTimeController::class, 'destroy'])->middleware('auth')->name('locTime_destroy');
Route::get('/locTime_edit/{locTime}', [LocTimeController::class,'edit'])->middleware('auth')->name('locTime_edit');
Route::post('/locTime_store', [LocTimeController::class, 'store'])->middleware('auth')->name('locTime_store');
Route::put('/locTime_update/{locTime}', [LocTimeController::class,'update'])->middleware('auth')->name('locTime_update');
Route::get('locTime_view',[LocTimeController::class,'show'])->middleware('auth')->name('locTime_view');

//homepage banner feature
//Route::get('/index', [BannerController::class, 'index'])->name('index');

Route::get('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');


// product
Route::get('product', function () {
    
    return view('product page/product',
        [
            "pagetitle" => "Our Product🍩",
            "produks" => Produk::all(),
            'categories' => Category::all(),
            
        ]
    );
});

Route::get('productDetail/{id}', [ProdukController::class, 'showProductDetail'])->name('productDetail');

// // product detail
// Route::get('productDetail', function () {
//     return view('product page/detail',
//         [
            
//             "pagetitle" => "Product Detail🍩",
//             "produkDetail" => Produk::where('id', $produk->id)->first()
//         ]
//     );
// });

//product feature CRUD
Route::delete('/product_destroy/{produk}', [ProdukController::class, 'destroy'])->middleware('auth')->name('product_destroy');
Route::get('/product_edit/{produk}', [ProdukController::class,'edit'])->middleware('auth')->name('product_edit');
Route::post('/product_store', [ProdukController::class, 'store'])->middleware('auth')->name('product_store');
Route::put('/product_update/{produk}', [ProdukController::class,'update'])->middleware('auth')->name('product_update');
Route::get('product_view',[ProdukController::class,'show'])->middleware('auth')->name('product_view');

// promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::delete('/promo_destroy/{promo}', [PromoController::class, 'destroy'])->middleware('auth')->name('promo_destroy');
Route::get('/promo_edit/{promo}', [PromoController::class,'edit'])->middleware('auth')->name('promo_edit');
Route::post('/promo_store', [PromoController::class, 'store'])->middleware('auth')->name('promo_store');
Route::put('/promo_update/{promo}', [PromoController::class,'update'])->middleware('auth')->name('promo_update');
Route::get('promo_view',[PromoController::class,'show'])->middleware('auth')->name('promo_view');

//review list di admin

Route::delete('/review_destroy/{review}', [ReviewController::class, 'destroy'])->middleware('auth')->name('review_destroy');
Route::post('/review_store', [ReviewController::class, 'store'])->name('review_store');
Route::get('review_view',[ReviewController::class,'show'])->middleware('auth')->name('review_view');



Auth::routes();


