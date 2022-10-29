<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session as FacadesSession;



class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function storeUser(Request $request)
    {
        // dd('hello');
        // var_dump(request()->all());
        $attribute = $request->validate([
            'name' => 'Required|max:20',
            'username' => 'Required|max:10|unique:users,username',
            'email' => 'Required|email',
            'password' => 'Required|max:8',
        ]);
        $attribute['password'] = bcrypt($attribute['password']);
        $user = User::create($attribute);
        session()->flash('message', 'Your account is created');
        return redirect()->route('login');
        //Auth::login($user);


    }

    public function loginForm()
    {
        return view('login.create');
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            'email' => 'Required|email',
            'password' => 'Required|max:8',
        ]);
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'the provided password not matched our records',
        ])->onlyInput('email');
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
       // dd("dfgh");
        FacadesSession::flush();
        Auth::logout();
        return Redirect('login');
    }
}
