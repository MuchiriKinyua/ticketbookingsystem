<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The iron claw</title>
</head>
<body class="claw1">
    <div class="claw2">
        <img src="{{ asset('images/claw.jpeg') }}" alt="">
    </div>
    <div class="claw3">
        <p>The Iron Claw</p>
        <p>Genre: Action</p>
        <p>Runtime: 120 min</p>
        <p>Cast: Zac Efron, Jeremy Allen White, Maxwell Jacob Friedman</p>
        <p>Time: 07:00pm EAT</p>
        <div class="claw4">
            <label for="Type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
        </div>
            <div class="claw5">
                <select id="type" class="form-control" name="type">
                    <option value="VIP">VIP</option>
                    <option value="Regular">Regular</option>
                </select>
            </div>
            <div class="claw6">
                Number of tickets
            </div>
            <div class="claw7">
                <select id="number of tickets" class="form-control" name="type">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
    </div>
    <div><button type="Buy" class="claw8">Buy</button></div>
</body>
</html>
