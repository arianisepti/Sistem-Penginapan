<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function login(){
       
        return view("login");
    }
    public function testi(){
        return view("testi");
    }
    public function contact(){
        return view("contact");
    }

    public function signin(Request $request)
    {
        $request->validate(
        [
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ],
    );
    }
}
