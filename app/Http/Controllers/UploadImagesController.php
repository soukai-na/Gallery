<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadImagesController extends Controller
{
    public function index()
    {
        $videos = DB::table('images')->where('image', 'Like' , '%.mp4')->get();

        $images = DB::table('images')->where('image', 'Like' , '%g')->get();

        return view('images.index',
        [
            'images' => $images,
            'videos' => $videos
        ]);
    }

    public function gallery()
    {
        $videos = DB::table('images')->where('image', 'Like' , '%.mp4')->get();

        $images = DB::table('images')->where('image', 'Like' , '%g')->get();

        return view('gallery',
        [
            'images' => $images,
            'videos' => $videos
        ]);
    }

    public function store(Request $request)
    {
         
        $validateImageData = $request->validate([
            'category' => 'required',
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg,mp4'
        ]);
        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $key => $file)
            {
                $image = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('files/images'),$image);
                //$image = $file->store('public/files/images');
                //$category = $file->getClientOriginalName();
                $category=$request->category;
                $insert[$key]['category'] = $category;
                $insert[$key]['image'] = $image;
            }
         }
        Image::insert($insert);
 
        return back()->with('status', 'Vos images ont bien été téléchargé');
    }

    public function delete(Image $image)
    {
        $image->delete();
        return back()->with('status', 'Votre image a bien été supprimé');
    }
}
