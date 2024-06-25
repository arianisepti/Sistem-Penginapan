<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\partner;
use App\Models\profile;
use App\Models\Reservasi;


class ClientController extends Controller
{
    function client()
    {
        $profiles = profile::latest()->paginate(20);
        $reservasis = Reservasi::latest()->paginate(20);
        return view('client', compact('profiles', 'reservasis'));
        
    }
    function company()
    {
        $data = partner::orderBy('nampart', 'desc')->get();
        $profiles = profile::orderBy('image', 'desc')->get();
        $reservasis = Reservasi::latest()->paginate(20);
       
        return view('Company.company', compact('data', 'profiles', 'reservasis'));
        
    }
}
