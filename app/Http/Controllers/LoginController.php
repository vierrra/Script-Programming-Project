<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function forgotPassword() {
        return view('forgotPassword');
    }

    public function recoveryPassword(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);


        if ($request->email == 'vierrra@hotmail.com')
            return redirect()->route('login');
        else
            return redirect()->back();
    }

    public function logar(Request $request) {
        if($request->email == 'vierrra@hotmail.com' && $request->password == '654321') 
            return redirect()->route('mainScreen');
        return redirect()->back()->with('error', 'Login ou senha incorreta');  
    }

    public function mainScreen() {
        return view('index');
    }
}