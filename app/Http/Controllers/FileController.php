<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $images = File::all();
        return view('uploadFiles',
        [
            'images' => $images
        ]);
    }

    public function display(){
        $images = File::all();
        return view(
            'displayFiles',
            [
                'images' => $images
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'images' => 'required',
            'images.*' => 'required|file|mimes:png,jpg,jpeg,mp4',
        ]);
        
        $images = [];
        if($request->images){
            foreach($request->images as $key => $image)
            {
                $imageCategory = time().rand(1,99).'.'.$image->extension();  
                $image->move(public_path('images'), $imageCategory);
  
                $images[]['category'] = $imageCategory;
            }
        }
    
        foreach ($images as $key => $image) {
            File::create($image);
        }
        
        return back()->with('success','You have successfully uploaded the images.')->with('images', $images); 
    }
}
