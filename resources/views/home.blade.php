@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body class="homepage">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('') }}
                    <div class="ticket">
                        Click on any to buy a ticket and book yourself a lifetime of enjoyment! </br>
                    </div>
                    <div class="images">
                        <a href="{{ route('claw') }}">
                            <img src="{{ asset('images/claw.jpeg') }}" alt="">
                        </a>
                        <a href="{{ route('land') }}">
                            <img src="{{ asset('images/land.jpeg') }}" alt="">
                        </a>
                        <a href="{{ route('mean') }}">
                            <img src="{{ asset('images/mean.jpeg') }}" alt="">
                        </a>
                    </div>
                    <div class="genre">
                        <a href="{{ route('claw') }}">
                            <div class="genre-item" id="genre1">The iron claw</div>
                        </a>
                        <a href="{{ route('land') }}">
                            <div class="genre-item" id="genre1">Land of bad</div>
                        </a>
                        <a href="{{ route('mean') }}">
                            <div class="genre-item" id="genre1">Mean girls</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

