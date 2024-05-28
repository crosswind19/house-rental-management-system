<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            if(auth()->user()->roles == 3){
                return redirect()->route('dashboard');
            }
            Auth::logout();
        }
        return back()->withErrors(['email' => 'Wrong credentials']);
    }
}
