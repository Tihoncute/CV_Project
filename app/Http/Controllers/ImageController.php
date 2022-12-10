<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        return view('');
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'image'=>'required',
        ]);
        $image_path = $request->file('image')->store('image','public');
        $data = Image::create([
            'image' => $image_path,
        ]);

        session()->flash('success');
        return redirect()->route('image.index');
    }
    public function index2(){
        return view('');
    }
    public function store2(Request $request)
    {
        
        $this->validate($request, [
            'image'=>'required',
        ]);
        $image_path = $request->file('image')->store('image','public');
        $data = Image::create([
            'image' => $image_path,
        ]);

        session()->flash('success');
        return redirect()->route('image.index');
    }
}
