<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$banners = Banner::all();

        // Debugging to check the data
        //dd($banners);

        //$dataBanner = Banner::all();
        // return view(
        //     'admin page/dashboard', compact('dataBanner'),
        // );
        //return view ('admin page/dashboard')->with('dataBanner',$dataBanner);

        return view('admin page/dashboard', [
            "pagetitle" => "admin threetoruz",
            "banners" => Banner::all()
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
        //validate
        $validatedData = $request->validate([
            'banner_pict' => 'image',

        ]);

        if ($request->file('banner_pict')) {
            $validatedData['banner_pict'] = $request->file('banner_pict')->store('images', ['disk' => 'public']);

            Banner::create([
                'banner_pict' => $validatedData['banner_pict'],
                'banner_judul' => $request->banner_judul,
                'banner_deskripsi' => $request->banner_deskripsi
            ]);
        }
        //jika imagenya nullable maka bisa menggunakan code ini
        //tapi dalam kasus ini imagenya wajib
        //else{
        // Banner::create([
        //     'banner_judul' => $request->banner_judul,
        //     'banner_deskripsi' => $request->banner_deskripsi
        // ]);
        //}

        return redirect()->route('banner')->with('status', 'message-sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
