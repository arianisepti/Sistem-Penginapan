<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Session;

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
            'password' => 'required',
            'role'=> 'required'
        ],
        [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]
    );
  
    $infologin = [
        'email'=> $request->email,
        'password'=> $request->password,
        'role'=> $request->role


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

    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'role' => 'required'
            ],
            [
                'name.required'=>'Nama wajib diisi',
                'email.required'=>'Email wajib diisi',
                'email.email'=>'Silakan masukkan email yang valid',
                'email.unique'=>'Email sudah pernah digunakan',
                'password.required'=>'Password wajib diisi',
                'password.min'=>'Minimum password yang diizinkan adalah 6 karakter'
            ]
        );

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ];
        User::create($data);
      
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
}
