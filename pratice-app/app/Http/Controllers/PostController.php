<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   // @return Resposnse;
  /* public function create()
   {
    return view('post.create');
   }
 
   public function store(Request $request)
   {
        $validatedata=$request->validate([
        'title'=>'bail|required|unique:posts|max:255',
        'body'=>'required',

    ]);
   }
   public function store(StorePostRequest $request)
   {
    // The incoming request is valid...
 
    // Retrieve the validated input data...
    $validated = $request->validated();
 
    // Retrieve a portion of the validated input data...
    $validated = $request->safe()->only(['name', 'email']);
    $validated = $request->safe()->except(['name', 'email']);
   }*/
   public function viewform()
   {
      return view('form');
   }
   public function store(Request $request)
    {
      $request->validate([
         'Email address' => 'required|unique:posts|max:255',
         'Password' => 'required',
        
     ]);
    }
}
