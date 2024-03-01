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
    <form action="{{ url('/reserve') }}" method="post">
        {{ csrf_field() }}
        <div class="mean4">
            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
            </select>
        </div>
        <div class="mean5">
            <select id="type" class="form-control" name="type">
                <option value="VIP">VIP - Sh.3,000</option>
                <option value="Regular">Regular - Sh.1,000</option>
            </select>
        </div>
        <div class="mean6">
            <label for="number_of_tickets" class="col-md-4 col-form-label text-md-right">{{ __('Number of tickets') }}</label>
            </select>
        </div>
        <div class="mean7">
            <select id="number_of_tickets" class="form-control" name="number_of_tickets">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="mean8">Buy</button>
    </form>
</body>
</html>
