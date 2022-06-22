@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <div class="main-content">
        <div class=dashboardBtns>

            <section class="wrapper-one">
                @if ($user->type == 'buyer' || $user->type == 'renter')
                    <a href="/propertymatches/{{$user->id}}">
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
                    <a href="/properties">
                        <div class="btn-opt">
                            <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                            <p>View Properties</p>
                        </div>
                    </a>
                @else
                    <a href="/myproperties/{{ $user->id }}">
                        <div class="btn-opt">
                            <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                            <p>Manage My Properties</p>
                        </div>
                    </a>
                    <a href="/profile/{{ $user->id }}">
                        <div class="btn-opt">
                            <img class="card-icon" src="/css/assets/home-icon.png" alt="">
                            <p>Manage Account</p>
                        </div>
                    </a>
                    <a href="/properties">
                        <div class="btn-opt">
                            <img class="card-icon" src="/css/assets/person-icon.png" alt="">
                            <p>View All Properties</p>
                        </div>
                    </a>
                @endif
            </section>
        </div>
    </div>
@endsection
