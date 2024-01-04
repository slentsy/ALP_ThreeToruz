<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')){
            // untuk membatasi data yang dicari sebanyak 5
            // withQueryString berfungsi untuk kembali berfungsi ke halaman selanjutnya
            $promos = Promo::where('nama_promo','like','%'.$request->search.'%')->orWhere('nama_promo','like','%'.$request->search.'%')->paginate(5)->withQueryString();
        } else{
            // untuk melihat data sebanyak 5 saja 
            $promos = Promo::paginate(5); // Ambil semua data promosi dari database
        }
        
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
    public function store(StorePromoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromoRequest $request, Promo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        //
    }
};