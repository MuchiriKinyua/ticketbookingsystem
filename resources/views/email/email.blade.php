<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
</head>
<body>
    <p>Dear User,</p>

    <p>Your reservation has been successfully confirmed. Details:</p>

    <p>Type: {{ $reservation->type }}</p>
    <p>Number of Tickets: {{ $reservation->number_of_tickets }}</p>

    <p>Thank you for choosing our service!</p>

    <p>Best regards,<br>Cytonn investments</p>
</body>
</html>
