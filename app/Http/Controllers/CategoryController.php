<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
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
            'category_name'=>'required|max:255'

        ]);

        Category::create([
            'category_name'=> $validateData['category_name']
        ]);

        return redirect()->route('category_view');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        $category = Category::all();
            return view('admin page/categoryRead',[
                'pagetitle' => 'Category',
                'categories'=> $category
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        $categoryEdit = Category::where('id', $category->id)->first();
        return view('admin page/categoryEdit', [
            'pagetitle' => 'edit category',
            'categoryEdit' => $categoryEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $validateData = $request->validate([
            'category_name'=>'required'

        ]);

        $category->update([
            'category_name'=> $validateData['category_name']
        ]);

        return redirect()->route('category_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        return redirect()->route('category_view');
    }
}
