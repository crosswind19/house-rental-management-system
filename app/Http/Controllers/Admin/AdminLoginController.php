<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.auth.AdminLogin');
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('username', 'password');

        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect()->route('admin.AdminDashboard');
            
        //     Auth::guard('admin')->logout();
        // }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            if(auth()->user()->roles == 1){
                return redirect()->route('admin.home');
            }
            Auth::logout();
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

}
