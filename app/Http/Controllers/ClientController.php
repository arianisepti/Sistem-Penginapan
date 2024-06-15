<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\partner;
use App\Models\profile;

class ClientController extends Controller
{
    function client()
    {
        $profiles = profile::latest()->paginate(20);
        return view('client', compact('profiles'));
        
    }
    function company()
    {
        $data = partner::orderBy('nampart', 'desc')->get();
        return view('Company.company', compact('data'));
        
    }
}
