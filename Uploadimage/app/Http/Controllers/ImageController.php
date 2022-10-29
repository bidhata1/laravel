<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use App\Models\Postimage;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //addform
    public function uploadImage()
    {
        return view('addimage');
    }
    //validate and store data to database
    public function saveImage(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('viewImage');
    }

    //view data to viewpage
    public function showImage()
    {
        $imageData= Postimage::all();
        return view('viewimage', compact('imageData'));
    }

    //edit image just show the previous image
    public function edit($id)
    {
         $imageData= Postimage::find($id);
        return view('edit', compact('imageData'));
    }
    //update image
    public function update(Request $request, $id)
    {
        $request->validate([
        'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
        $imageData = Postimage::find($id);
        $imageData->image = $request->input('image');
       
         if($request->hasfile('image'))
        {
           // $destination = 'public/Image/'.$imageData->image;
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/Image/', $filename);
            $imageData->image = $filename;
        }

        $imageData->update();
        return redirect()->route('viewImage');
    }
      /*  $imageData=Postimage::find($id);
        dd($request->image);
        $imageData->image=$request->image;
        $imageData->save();
        return redirect()->back();*/

    //delete image
    public function destroy($id)
    {
     $imageData = Postimage::find($id);
     $imageData->delete();
    return redirect()->back();
    }
}
