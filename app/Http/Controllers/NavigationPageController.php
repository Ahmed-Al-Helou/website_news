<?php

namespace App\Http\Controllers;

use App\Models\navigationPage;
use Illuminate\Http\Request;

class NavigationPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = navigationPage::all();
        return view('front.nav_header.show_All_pages',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.nav_header.add_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_page' => 'required|unique:navigation_pages|max:50',
        ]);
        $pages = navigationPage::create([
            'name_page' =>$request->name_page
        ]);
        session()->flash('Add','Nav has been Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = navigationPage::find($id);
        return view('front.nav_header.edit_page',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $page = navigationPage::find($id);
        $page->update([
            'name_page' => $request->name_page
        ]);

        session()->flash('edit','page has been edited successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */

        public function delete($id){
            navigationPage::where('id',$id)->delete();
            session()->flash('delete','page has been deleted successfully');
            return back();
        }
}
