<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    function client()
    {
        return view('client');
        
    }
    function company()
    {
        return view('company');
        
    }
}
