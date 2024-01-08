<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
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
        //validate
        $validateData = $request->validate([
            'review_customerName'=>'required',
            'review_description' => 'required',
            'review_email' => 'required',
            'produk_id'=> 'required'
        ]);

        Review::create([
            'review_customerName'=> $validateData['review_customerName'],
            'review_description'=> $validateData['review_description'],
            'review_email'=> $validateData['review_email'],
            'produk_id'=> $validateData['produk_id'],
        ]);

        return redirect()->route('productDetail', ['id' => $validateData['produk_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
        $review = Review::all();
        $produk = Produk::all();
            return view('admin page/reviewRead',[
                "pagetitle" => "Customer Reviews",
                'reviews'=> $review,
                'produk'=> $produk
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
        $review->delete();

        return redirect()->route('review_view');
    }
}
