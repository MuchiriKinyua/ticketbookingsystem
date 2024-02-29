<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    protected $userEmail;

    /**
     * Create a new message instance.
     *
     * @param  string  $userEmail
     * @param  \App\Models\Reservation  $reservation
     * @return void
     */
    public function __construct($userEmail, $reservation)
    {
        $this->userEmail = $userEmail;
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->userEmail)
                    ->view('email.email')
                    ->subject('Reservation Confirmation');
    }
}
