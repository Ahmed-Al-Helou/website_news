<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Admins = Admin::all();
        return view('front.Admin.show_all_admin',compact('Admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.Admin.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:admins|max:50',
            'title' => 'required|max:100',
            'mobile' => 'required|max:20',
            'email' => 'required|max:50',
            'greeting' => 'required|max:50',
            'logo' => 'required',
            'img_header' => 'required'
        ]);
        $imageLogo = $request->file('logo')->getClientOriginalName();
        $path_logo = $request->file('logo')->storeAs('Admin',$imageLogo,'image');//storeAs('folder','nameImg','disk')

        $imageHeader = $request->file('img_header')->getClientOriginalName();
        $path_img = $request->file('img_header')->storeAs('Admin',$imageHeader,'image');
        Admin::create([
            'name' => $request->name,
            'title' =>$request->title,
            'mobile' => $request->mobile,
            'email' =>$request->email,
            'password' => $request->password,
            'greeting' =>$request->greeting,
            'logo' =>$path_logo,
            'img_header' =>$path_img
        ]);

        session()->flash('Add','Admin has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $admin = Admin::where('id',$id)->first();
        return view('front.Admin.edit_admin',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $admin = Admin::findorFail($id);
        $imageLogo = $request->file('logo')->getClientOriginalName();
        $logo = $request->file('logo')->storeAs('imgs',$imageLogo,'image');

        $imageHeader = $request->file('img_header')->getClientOriginalName();
        $img_header = $request->file('img_header')->storeAs('imgs',$imageHeader,'image');

        $admin['logo'] = 'imgs/'.$logo;
        $admin['img_header'] = 'imgs/'.$img_header;

        $admin->update([
            'name' =>$request->name,
            'email'=>$request->email,
            'mobile' =>$request->mobile,
            'password' =>$request->password,
            'greeting' =>$request->greeting,
            'title' =>$request->title,
            'logo' => $logo,
            'img_header' => $img_header
        ]);

        session()->flash('edit','Admin has been modified successfully');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        Admin::where('id',$id)->delete();
        session()->flash('delete','Admin has been deleted Successfully');
        return back();
    }
}
