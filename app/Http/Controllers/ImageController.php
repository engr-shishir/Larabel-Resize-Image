<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    
    public function resizeImage()
    {
    return view('resizeImage');
    }


    public function resizeImageSubmit(Request $request)
    {
        $image = $request->file('file');
        $fileName = $image->getClientOriginalName();
        $resizes = Image::make($image->getRealPath());
        $resizes->resize(300,300);
        $resizes->save(public_path('image/'.$fileName));
        return back()->with('resize','Image Resize Successfully');
    } 
}
