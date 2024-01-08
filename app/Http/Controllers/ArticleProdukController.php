<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\ArticleProduk;
use App\Http\Requests\StoreArticleProdukRequest;
use App\Http\Requests\UpdateArticleProdukRequest;

class ArticleProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'produk_id'=>'required',
            'article_id'=>'required'

        ]);

        ArticleProduk::create([
            'produk_id'=>  $validateData['produk_id'],
            'article_id'=>  $validateData['article_id']
            
        ]);
        return redirect()->route('funfact_view');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(ArticleProduk $articleProduk)
    {
        //
        $article = Article::all();
        $produk = Produk::all();
        $articleProduk = ArticleProduk::all();
            return view('admin page/funfactRead',[
                'pagetitle' => 'Organize Product',
                'articles'=> $article,
                'produks'=> $produk,
                'articleProduks'=>$articleProduk
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArticleProduk $articleProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArticleProduk $articleProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArticleProduk $articleProduk)
    {
        //
        $articleProduk->delete();

        return redirect()->route('funfact_view');
    }
}
