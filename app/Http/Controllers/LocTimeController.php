<?php

namespace App\Http\Controllers;

use App\Models\LocTime;
use App\Http\Requests\StoreLocTimeRequest;
use App\Http\Requests\UpdateLocTimeRequest;
use Illuminate\Http\Request;

class LocTimeController extends Controller
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
            'loc' => 'required',
            'time'=>'required',
            'description'=>'required'

        ]);
        LocTime::create([
            'loc' => $validateData['loc'],
            'time'=> $validateData['time'],
            'description'=>  $validateData['description']
        ]);

        return redirect()->route('locTime_view');
    }

    /**
     * Display the specified resource.
     */
    public function show(LocTime $locTime)
    {
        //
        $locTime = LocTime::all();
            return view('admin page/locTimeRead',[
                'pagetitle' => 'Location & Operational Hours',
                'locTimes'=> $locTime,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocTime $locTime)
    {
        //
        $locTimeEdit = LocTime::where('id', $locTime->id)->first();
        //$banners = Banner::all();
        return view('admin page/locTimeRead', [
            'pagetitle' => 'edit location & operational hours',
            'locTimeEdit' => $locTimeEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LocTime $locTime)
    {
        //
        $validateData = $request->validate([
            'loc' => 'required',
            'time'=>'required',
            'description'=>'required'

        ]);
        $locTime->update([
            'loc' => $validateData['loc'],
            'time'=> $validateData['time'],
            'description'=>  $validateData['description']
        ]);

        return redirect()->route('locTime_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocTime $locTime)
    {
        //
        $locTime->delete();

        return redirect()->route('locTime_view');
    }
}
