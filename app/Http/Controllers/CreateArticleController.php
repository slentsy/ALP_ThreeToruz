<?php

namespace App\Http\Controllers;

use App\Models\CreateArticle;
use App\Http\Requests\StoreCreateArticleRequest;
use App\Http\Requests\UpdateCreateArticleRequest;

class CreateArticleController extends Controller
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
    public function store(StoreCreateArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CreateArticle $createArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateArticle $createArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreateArticleRequest $request, CreateArticle $createArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateArticle $createArticle)
    {
        //
    }
}
