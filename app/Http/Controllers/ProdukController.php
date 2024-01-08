<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Review;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
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
            'foto_produk' => 'image',
            'nama_produk'=>'required',
            'harga_produk'=>'required',
            'deskripsi_produk'=>'required',
            'category_id'=>'required'

        ]);

        if ($request->file('foto_produk')) {
            $validateData['foto_produk'] = $request->file('foto_produk')->store('images', ['disk' => 'public']);

            Produk::create([
                'foto_produk' => $validateData['foto_produk'],
                'nama_produk' => $validateData['nama_produk'],
                'harga_produk' => $validateData['harga_produk'],
                'deskripsi_produk'=> $validateData['deskripsi_produk'],
                'category_id'=>  $validateData['category_id'],
                'highlights_produk' => $request->has('highlights_produk')
            ]);
        }

        
        return redirect()->route('product_view');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
        $produk = Produk::all();
        $category = Category::all();
            return view('admin page/productRead',[
                'pagetitle' => 'Organize Product',
                'produks'=> $produk,
                'category'=> $category,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
        $productEdit = Produk::where('id', $produk->id)->first();
        $categoryEdit = Category::all();
        //$banners = Banner::all();
        return view('admin page/productEdit', [
            'pagetitle' => 'edit product',
            'productEdit' => $productEdit,
            'categoryEdit'=> $categoryEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
        $validateData = $request->validate([
            'foto_produk' => 'image',
            'nama_produk'=>'required',
            'harga_produk'=>'required',
            'deskripsi_produk'=>'required',
            'category_id'=>'required'

        ]);

        if ($request->file('foto_produk')) {
            if($produk->foto_produk){
                Storage::disk('public')->delete($produk->foto_produk);
            }
            $validateData['foto_produk'] = $request->file('foto_produk')->store('images', ['disk' => 'public']);

            $produk->update([
                'foto_produk' => $validateData['foto_produk'],
                'nama_produk' => $validateData['nama_produk'],
                'harga_produk' => $validateData['harga_produk'],
                'deskripsi_produk'=> $validateData['deskripsi_produk'],
                'category_id'=>  $validateData['category_id'],
                'highlights_produk' => $request->has('highlights_produk')
            ]);
        }
        return redirect()->route('product_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
        if($produk->foto_produk){
            if(Storage::disk('public')->exists($produk->foto_produk)){
                Storage::disk('public')->delete($produk->foto_produk);
            }
        }
        $produk->delete();

        return redirect()->route('product_view');
    }

    public function showProductDetail($id)
    {
        $productDetail = Produk::find($id);
        $highlights = Produk::where('highlights_produk', true)->get();
        

        if (!$productDetail) {
            // Handle the case where the product with the given ID is not found.
            // You might want to redirect back with an error message or take another appropriate action.
            return redirect()->route('product_view')->with('error', 'Product not found.');
        }

        $reviews = Review::all();
        return view('product page/detail', [
            "pagetitle" => "Product Detail 🍩",
            "productDetail" => $productDetail,
            "reviews" => $reviews,
            'categories' => Category::all(),
            'highlights' => $highlights
        ]);
    }
}
