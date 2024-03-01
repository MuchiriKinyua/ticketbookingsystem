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
    <div class="claw8">
        <a href="{{ route('admin.login') }}">Login as Administrator</a>
    </div>
    <div class="claw2">
        <img src="{{ asset('images/claw.jpeg') }}" alt="">
    </div>
    <div class="claw3">
        <p>The Iron Claw</p>
        <p>Genre: Action</p>
        <p>Runtime: 120 min</p>
        <p>Cast: Zac Efron, Jeremy Allen White, Maxwell Jacob Friedman</p>
        <p>Time: 07:00pm EAT</p>
        <form action="{{ url('/reserve') }}" method="post">
            {{ csrf_field() }}
            <div class="claw4">
                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                </select>
            </div>
            <div class="claw5">
                <select id="type" class="form-control" name="type">
                    <option value="VIP">VIP - Sh.3,000</option>
                    <option value="Regular">Regular - Sh.1,000</option>
                </select>
            </div>
            <div class="claw6">
                <label for="number_of_tickets" class="col-md-4 col-form-label text-md-right">{{ __('Number of tickets') }}</label>
                </select>
            </div>
            <div class="claw7">
                <select id="number_of_tickets" class="form-control" name="number_of_tickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" class="claw8">Buy</button>
        </form>
</body>
</html>
