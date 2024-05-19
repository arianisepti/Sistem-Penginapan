<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ]
    );
  
    $infologin = [
        'email'=> $request->email,
        'password'=> $request->password,


    ];

    if(Auth::attempt($infologin)){
        return redirect('/client');
    }else{
        return redirect('login')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
    }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');

    }
}
