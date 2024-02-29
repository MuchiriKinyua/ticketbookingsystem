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
    <div class="land4">
        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>
    </div>
        <div class="land5">
            <select id="type" class="form-control" name="type">
                <option value="VIP">VIP</option>
                <option value="Regular">Regular</option>
            </select>
        </div>
</body>
</html>
