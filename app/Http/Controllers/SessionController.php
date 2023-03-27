<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    
    public function login(){
        $attr = request()->validate([
            'email' => 'required|email|min:5|max:50',
            'password' => 'required|min:8|max:50'
        ]);
        
        if(auth()->attempt($attr)){
            session()->regenerate();
            return redirect('/');
        }
        
        throw ValidationException::withMessages([
            'email' => 'Your email or password did not match our records'
        ]);
    }
    
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
