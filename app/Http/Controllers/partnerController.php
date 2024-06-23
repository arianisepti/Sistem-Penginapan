<?php

namespace App\Http\Controllers;

use App\Models\partner;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = partner::orderBy('nampart', 'desc')->get();

       
        return view('Company.partner', compact('data'));
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('Company.company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Session::flash('nampart', $request->nampart);
    Session::flash('bkontrak', $request->bkontrak);
    Session::flash('alamat', $request->alamat);
    Session::flash('notel', $request->notel);

    $request->validate([
        'nampart' => 'required',
        'bkontrak' => 'required',
        'alamat' => 'required',
        'notel' => 'required|numeric:partner,notel',
    ],[
        'nampart.required'=>'Nama Partner Mohon Diisi',
        'bkontrak.required'=>'Batas Kontrak Mohon Diisi',
        'alamat.required'=>'Alamat Mohon Diisi',
        'notel.required'=>'Nomor Telepon Mohon Diisi',
        'notel.numeric'=>'Nomor Telepon Harus Pakai ANGKA',
    ]);

    $data = [
        'nampart' => $request->input('nampart'),
        'bkontrak' => $request->input('bkontrak'),
        'alamat' => $request->input('alamat'),
        'notel' => $request->input('notel'),
    ];

    partner::create($data);

    return redirect('/company')->with('success','Berhasil menambahkan data');

}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
