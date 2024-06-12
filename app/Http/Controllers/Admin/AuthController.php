<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request){
        if ($request->isMethod('post')){
            if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')]))
                return redirect()->route('admin.dashboard');
            return redirect()->route('admin.login')->with(['error' => "Invalid Credentials."]);
        }
        return view('admin.auth.login');
    }

    public function logout(){

        auth('admin')->logout();
        return redirect()->route('admin.login');
    }

}
