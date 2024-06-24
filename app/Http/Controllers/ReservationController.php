<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{

    public function index() : View
    {
        //get all products
        $reservasis = Reservasi::latest()->paginate(20);

        //render view with products
        return view('Booking.index', compact('reservasis'));
    }


    public function updateStatus(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:pending,cancel,proceed',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->status = $request->status;
        $reservasi->save();

        if ($request->status == 'proceed') {
            return redirect()->route('showPaymentOptions', $reservasi->id);
        }

        return redirect()->back()->with('success', 'Status reservasi berhasil diperbarui!');
    }


    public function create() : view
    {
        return view('Booking.index');
    }

    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'destination' => 'required|string|max:255',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'rooms' => 'required|integer|min:1',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Reservasi::create($validatedData);

        return redirect('/booking')->with('success', 'Reservation successfully created!');
    }
}

