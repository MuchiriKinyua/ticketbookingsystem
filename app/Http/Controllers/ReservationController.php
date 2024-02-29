<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation; // Import your Reservation model

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required|in:VIP,Regular',
            'num_tickets' => 'required|integer|min:1',
            // Add other validations as needed
        ]);

        // Create a new reservation in the database
        Reservation::create([
            'type' => $request->input('type'),
            'num_tickets' => $request->input('num_tickets'),
            // Add other fields as needed
        ]);

        // You can add more logic here, e.g., send a confirmation email

        return redirect()->back()->with('success', 'Reservation successful!');
    }
}
