<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //ambil data dari articles
        $articles = Article::all();

        return view('article page/article', [
            'articles' => $articles ,
            "pagetitle" => "Read Me"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form untuk insert data 
        return view('admin page/createArticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'judul_article' => 'required', 
            'deskripsi_article' => 'required', 
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withInput()->withErrors($validatedData);
        }

        // dd($request->all());

        $gambar = $request->file('gambar');
        $filename = date('Y-m-d').$gambar->getClientOriginalName();
        $path = 'photo-article/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($gambar));

        Article::create([
            'judul_article' => $request->judul_article,
            'deskripsi_article' => $request->deskripsi_article,
            'tanggal_publish' => $request->tanggal_publish,
            'gambar' => $filename,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
        
        
        // Article::create($request->except(['-token','submit'])); 
        // return redirect()->route('article.create');
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
        return view('admin page/editArticle', compact('article'));
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
            'gambar' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ]);

        $article = Article::findOrFail($id);

        // check if a new image is provided
        if ($request->hasFile('gambar')){
            // delete the old image if it exists
            if($article->gambar){
                Storage::disk('public')->delete('photo-article/' . $article->gambar);
            }

            // Upload the new image
            $gambar = $request->file('gambar');
            $filename = date('Y-m-d') . $gambar->getClientOriginalName();
            $path = 'photo-article/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($gambar));

            // Update the article with the new image
            $validatedData['gambar'] = $filename;
        }

        $article->update($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully!');
    }
}
