<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use App\Models\LocTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $highlights = Produk::where('highlights_produk', true)->get();
        //$promo = Promo::find(1);
        return view('home', [
            "pagetitle" => "Homepage",
            "maintitle" => "Homepage",
            "banners" => Banner::all(),
            //"promos" => $promo,
            "locTimes" => LocTime::all(),
            'highlights' => $highlights
        ]);
    }
}
