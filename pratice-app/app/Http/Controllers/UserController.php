<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    public function loadview($id)
    {
       //echo $id;
        // $id=['1', '2','3'];
        return view('users',['id'=>$id]);
    }

    public function index()
    {
        return DB::select("select * from students");
    }

  /*  function getData()
    {
        return ::all();
    }*/
}
