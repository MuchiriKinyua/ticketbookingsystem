<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Reservation;
use App\Mail\ReservationNotification;

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        // Validate the request data as needed
        $validatedData = $request->validate([
            'type' => 'required|in:VIP,Regular',
            'number_of_tickets' => 'required|numeric|min:1|max:5',
            // Add more validation rules if needed
        ]);

        // Create a new reservation
        $reservation = new Reservation();
        $reservation->type = $validatedData['type'];
        $reservation->number_of_tickets = $validatedData['number_of_tickets'];
        // Set other reservation attributes as needed
        $reservation->save();

        // Get the user's email
        $userEmail = Auth::user()->email;

        // Send reservation notification email
        Mail::to($userEmail)->send(new ReservationNotification($userEmail, $reservation));

        // Redirect or perform any additional actions
        return redirect()->back()->with('success', 'Reservation successful! An email has been sent.');
    }
}
