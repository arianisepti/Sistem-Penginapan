<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    public function showPaymentOptions($reservationId) : View
    {
        $reservation = Reservasi::findOrFail($reservationId);
        return view('Booking.payment-options', compact('reservation'));
    }

    public function createBill(Request $request, $reservationId) : RedirectResponse
    {
        $request->validate([
            'payment_method' => 'required|string|max:255',
        ]);

        $reservation = Reservasi::findOrFail($reservationId);
        
       
        $total_amount = $this->calculateTotalAmount($reservation);

       
        $reservation->update([
            'payment_method' => $request->payment_method,
            'total_amount' => $total_amount,
            'status' => 'paid',
        ]);

       
        return redirect()->route('showBill', $reservation->id)->with('success', 'Tagihan berhasil dibuat!');
    }

    private function calculateTotalAmount($reservation)
    {
       
        $price_per_night = 100; 
        $check_in = \Carbon\Carbon::parse($reservation->check_in);
        $check_out = \Carbon\Carbon::parse($reservation->check_out);
        $nights = $check_out->diffInDays($check_in);
        
        return $nights * $price_per_night;
    }

    public function showBill($reservationId) : View
    {
        $reservation = Reservasi::findOrFail($reservationId);
        return view('Booking.bill', compact('reservation'));
    }
}
