<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('front.categories.show_category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.categories.add_new_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationDate = $request->validate([
            'name_category' => 'required|unique:categories|max:255'
        ]);

        Category::create([
            'name_category' => $request->name_category
        ]);

        session()->flash('Add','Category has been successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('front.categories.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name_category' => $request->name_category
        ]);

        session()->flash('edit','Category has edited successfully');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Request $request)
    // {

    // }

    public function delete($id){
        Category::find($id)->delete();
        session()->flash('delete','Category has been successfully');
        return back();
    }
}
