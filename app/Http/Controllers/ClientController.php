<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\partner;

class ClientController extends Controller
{
    function client()
    {
        return view('client');
        
    }
    function company()
    {
        $data = partner::orderBy('nampart', 'desc')->get();
        return view('Company.company', compact('data'));
        
    }
}
