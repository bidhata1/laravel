<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function userLogin(Request $request)
    {
        $name = $request->username;
        $password = $request->password;

        $query = DB::table('users')->where('username',$name)->first();
        if($query)
        {
            $request->session()->put('username',$name);
             return redirect('profile');
        }
        else
        {
            return redirect('login');
        }
      
    //  $data= $req->input('user');
    //    
      
       /*$value = $req->session()->get('key', 'default');
 
        $value = $req->session()->get('key', function () {
        return $req->input('user');
        });*/
    }

    // public function show( Request $request)
    // {      
    //         // $name = Input::get('username');
    //          //$pass=Input::get('password');
             
    //          $request = DB::table('users')->select('id')->get();
    //         if (Input::has('id'))
    //         {
    //             return redirect('profile');
    //         }
    //         else 
    //         echo 'username and password doesnot match';
    //        /*
    //         if($request->session()->has('username'))
    //           return  redirect('profile')  ;
    //         else
    //            echo 'No data in the session';
    //            */
    // }

       
    
}

    /*
    public function showLogin(Request $req)
    {
        $req->validate([
            'user' => 'required|unique:posts|max:255',
            'Password' => 'required']);
    }

    public function doLogin()
    {
        
    }
    public function doLogout()
    {
        Auth::logout(); 
        return Redirect::to('login'); 
    }
}
*/
    