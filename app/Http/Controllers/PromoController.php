<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $promos = Promo::all(); // Ambil semua data promosi dari database
        return view('promo page/promo', ['promos' => $promos])->with([
            "pagetitle" => "promo📢"
        ]);
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
            'image'=>'image',
            'name'=>'required',

        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('images', ['disk' => 'public']);

            Promo::create([
                'image' => $validateData['image'],
                'name' => $validateData['name'],
                'price' => $request->price,
                'tanggal_mulai'=> $request->tanggal_mulai,
                'tanggal_berakhir'=> $request->tanggal_berakhir,
                'description'=> $request->description
            ]);
        }
        return redirect()->route('promo_view');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
        $promo = Promo::all();
        return view('admin page/promoRead',[
            'pagetitle'=>'promo admin',
            'promos'=>$promo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        //
        $promoEdit = Promo::where('id', $promo->id)->first();
        //$banners = Banner::all();
        return view('admin page/promoEdit', [
            'pagetitle' => 'edit promo',
            'promoEdit' => $promoEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        //
        $validateData = $request->validate([
            'image'=>'image',
            'name'=>'required',

        ]);

        if ($request->file('image')) {
            if($promo->image){
                Storage::disk('public')->delete($promo->image);
            }
            $validateData['image'] = $request->file('image')->store('images', ['disk' => 'public']);

            $promo->update([
                'image' => $validateData['image'],
                'name' => $validateData['name'],
                'price' => $request->price,
                'tanggal_mulai'=> $request->tanggal_mulai,
                'tanggal_berakhir'=> $request->tanggal_berakhir,
                'description'=> $request->description
            ]);
        }
        return redirect()->route('promo_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        //
        if($promo->image){
            if(Storage::disk('public')->exists($promo->image)){
                Storage::disk('public')->delete($promo->image);
            }
        }
        $promo->delete();

        return redirect()->route('promo_view');
    }
}
