<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewForm()
       {
        return view('form');
    }

    public function storeData(Request $req)
    {
        $req->validate([
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required',
            'address'=>'required'
        ]);
        return $req->input();
    }
}
