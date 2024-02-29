<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mean girls</title>
</head>
<body class="mean1">
    <div class="mean2">
        <img src="{{ asset('images/mean.jpeg') }}" alt="">
    </div>
    <div class="mean3">
        <p>Mean girls</p>
        <p>Genre: Teen</p>
        <p>Runtime: 150 min</p>
        <p>Cast: Lindsay Lohan, Rachel McAdams, Tina Fey</p>
        <p>Time: 11:00pm EAT</p>
    </div>
    <div class="form-group-row">
        <label for="Type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
    </div>
        <div class="col-md-6">
            <select id="Type" class="form-control" name="Type">
                <option value="VIP">VIP</option>
                <option value="Regular">Regular</option>
            </select>
        </div>
        <div class="mean4">
            Number of tickets
        </div>
        <div class="mean5">
            <select id="number of tickets" class="form-control" name="Type">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div><button type="Buy" class="mean6">Buy</button></div>
</body>
</html>
