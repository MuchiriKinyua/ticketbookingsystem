<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land of blade</title>
</head>
<body class="land1">
    <div class="land2">
        <img src="{{ asset('images/land.jpeg') }}" alt="">
    </div>
    <div class="land3">
        <p>Land of blade</p>
        <p>Genre: Action</p>
        <p>Runtime: 110 min</p>
        <p>Cast: Russell Crowe, Luke Hemsworth, Liam Hemsworth</p>
        <p>Time: 09:00pm EAT</p>
    </div>
    <form action="{{ url('/reserve') }}" method="post">
        {{ csrf_field() }}
        <div class="land4">
            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
            </select>
        </div>
        <div class="land5">
            <select id="type" class="form-control" name="type">
                <option value="VIP">VIP - Sh.3,000</option>
                <option value="Regular">Regular - Sh.1,000</option>
            </select>
        </div>
        <div class="land6">
            <label for="number_of_tickets" class="col-md-4 col-form-label text-md-right">{{ __('Number of tickets') }}</label>
            </select>
        </div>
        <div class="land7">
            <select id="number_of_tickets" class="form-control" name="number_of_tickets">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="land8">Buy</button>
    </form>
</body>
</html>
