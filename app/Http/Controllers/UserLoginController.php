<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                return redirect()->route('home');
            }else if(auth()->user()->roles == 2){
                return redirect()->route('agent');
            }else if(auth()->user()->roles == 1){
                return redirect()->route('admin/home');
            }

            // if(auth()->user()->roles == 3){
            //     return redirect()->route('dashboard');
            // }
            Auth::logout();
        }
        return back()->withErrors(['email' => 'Wrong credentials']);
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

            // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, log the user in
        auth()->login($user);

        return redirect()->route('home')->with('success', 'Registration successful.');
        }

        
}
