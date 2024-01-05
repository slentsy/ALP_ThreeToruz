<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $currentDate = now();
        $activeBanners = Banner::where('starting_time', '<=', $currentDate)->where('Ending_time', '>=', $currentDate)->get();
        return view('home page/homepage', ['banner' => $activeBanners]);
        //$banners = Banner::all();

        // Debugging to check the data
        //dd($banners);

        //$dataBanner = Banner::all();
        // return view(
        //     'admin page/dashboard', compact('dataBanner'),
        // );
        //return view ('admin page/dashboard')->with('dataBanner',$dataBanner);

        

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk relation
        // $banners = Banner::all();
        // return view('admin page/dashboard', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $validateData = $request->validate([
            'banner_pict' => 'image',
            'starting_time'=>'required',
            'Ending_time'=>'required'

        ]);

        if ($request->file('banner_pict')) {
            $validateData['banner_pict'] = $request->file('banner_pict')->store('images', ['disk' => 'public']);

            Banner::create([
                'banner_pict' => $validateData['banner_pict'],
                'banner_judul' => $request->banner_judul,
                'banner_deskripsi' => $request->banner_deskripsi,
                'starting_time'=> $validateData['starting_time'],
                'Ending_time'=>  $validateData['Ending_time']
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

        return redirect()->route('banner_view');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $banner = Banner::all();
            return view('admin page/bannerRead',[
                'pagetitle' => 'Home Banner',
                //'maintitle' => 'project Data',
                'banners'=> $banner,
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
        $bannerEdit = Banner::where('id', $banner->id)->first();
        //$banners = Banner::all();
        return view('admin page/bannerEdit', [
            'pagetitle' => 'edit banner',
            'bannerEdit' => $bannerEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $validateData = $request->validate([
            'banner_pict' => 'image',
            'starting_time'=>'required',
            'Ending_time'=>'required'

        ]);

        if ($request->file('banner_pict')) {
            if($banner->banner_pict){
                Storage::disk('public')->delete($banner->banner_pict);
            }
            $validateData['banner_pict'] = $request->file('banner_pict')->store('images', ['disk' => 'public']);

            $banner->update([
                'banner_pict' => $validateData['banner_pict'],
                'banner_judul' => $request->banner_judul,
                'banner_deskripsi' => $request->banner_deskripsi,
                'starting_time'=> $validateData['starting_time'],
                'Ending_time'=>  $validateData['Ending_time']
            ]);
        }
        return redirect()->route('banner_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        if($banner->banner_pict){
            if(Storage::disk('public')->exists($banner->banner_pict)){
                Storage::disk('public')->delete($banner->banner_pict);
            }
        }
        $banner->delete();

        return redirect()->route('banner_view');
    }
}