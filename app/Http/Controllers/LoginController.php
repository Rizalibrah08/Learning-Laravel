<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            if (Auth::user()->status == 0){
                Auth::logout();

                return back()->withErrors([
                    'email' => 'Akun anda Modar',
                ]);
            }
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email' => 'email atau pwnya salah bro',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'anda telah logout');
    }
}
