<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data dari articles
        $articles = Article::all();
        return view('article page/article', ['articles' => $articles])->with([
            "pagetitle" => "Read Me"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form untuk insert data 
        return view('article page/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->except(['-token','submit']));
        Article::create($request->except(['-token','submit'])); 
        return redirect()->route('article');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $article = Article::findOrFail($id); 
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'judul_article' => 'required',
            'deskripsi_article' => 'required',
            'tanggal_publish' => 'required|date',
            'gambar' => 'required',
        ]);

        $article = Article::findOrFail($id);
        $article->update($validatedData);

        return redirect(route('articles.index'))->with('success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect(route('articles.index'))->with('success', 'Article deleted successfully!');
    }
}
