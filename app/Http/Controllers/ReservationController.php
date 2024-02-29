<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

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

        // Redirect or perform any additional actions
        return redirect()->back()->with('success', 'Reservation successful!');
    }
}
