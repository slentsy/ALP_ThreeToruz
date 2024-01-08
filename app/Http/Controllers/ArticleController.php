<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
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
            'gambar' => 'image',
            'judul_article'=>'required',
            'deskripsi_article'=>'required',

        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('images', ['disk' => 'public']);

            Article::create([
                'gambar' => $validateData['gambar'],
                'judul_article' => $validateData['judul_article'],
                'deskripsi_article' => $validateData['deskripsi_article']
            ]);
        }

        
        return redirect()->route('article_view');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        $article = Article::all();
        
            return view('admin page/articleRead',[
                'pagetitle' => 'Organize Product',
                'articles'=> $article
                
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        $articleEdit = Article::where('id', $article->id)->first();
       
        
        return view('admin page/articleEdit', [
            'pagetitle' => 'edit product',
            'articleEdit' => $articleEdit
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
        $validateData = $request->validate([
            'gambar' => 'image',
            'judul_article'=>'required',
            'deskripsi_article'=>'required',

        ]);

        if ($request->file('gambar')) {
            if($article->gambar){
                Storage::disk('public')->delete($article->gambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('images', ['disk' => 'public']);

            $article->update([
                'gambar' => $validateData['gambar'],
                'judul_article' => $validateData['judul_article'],
                'deskripsi_article' => $validateData['deskripsi_article']
            ]);
        }
        return redirect()->route('article_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
        if($article->gambar){
            if(Storage::disk('public')->exists($article->gambar)){
                Storage::disk('public')->delete($article->gambar);
            }
        }
        $article->delete();

        return redirect()->route('article_view');
    }
}
