@extends('templates/layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <div class=dashboardBtns>

        <section class="wrapper-one">
            @if ($user->type == 'buyer' || $user->type == 'renter')
                <a href="/">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                        <p>View Matches</p>
                    </div>
                </a>

                <a href="/profile/{{ $user->id }}">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/person-icon.png" alt="">
                        <p>Manage Account</p>
                    </div>
                </a>
                <a href="/">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                        <p>View Properties</p>
                    </div>
                </a>
            @else
                <a href="/">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                        <p>View Properties</p>
                    </div>
                </a>

                <a href="/register">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/person-icon.png" alt="">
                        <p>View Matches</p>
                    </div>
                </a>
                <a href="/profile/{{ $user->id }}">
                    <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/home-icon.png" alt="">
                        <p>Manage Account</p>
                    </div>
                </a>
            @endif
        </section>
    @endsection
