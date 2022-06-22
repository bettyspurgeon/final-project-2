@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <div class="main-content">
        <div class=dashboardBtns>

            <section class="wrapper-one">
                @if ($user->type == 'buyer' || $user->type == 'renter')

                    <a href="/propertymatches/{{$user->id}}">

                        <div class="btn-opt">
                        <i class="fa-solid fa-heart fa-7x " style="color:white" ></i>
                            <p class="paragraph">View Matches</p>
                        </div>
                    </a>

                    
                    <a class="btn-title" href="/profile/{{ $user->id }}">
                        <div class="btn-opt">
                        <i class="fa-solid fa-user-gear fa-7x" style="color:white"></i>
                            <p class="paragraph">Manage Account</p>
                        </div>  
                    </a>
                    <a class="btn-title" href="/properties">
                        <div class="btn-opt">
                            <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                            <p class="paragraph">View Properties</p>
                        </div>
                    </a>
                @else
                    <a  class="btn-title"href="/myproperties/{{ $user->id }}">
                        <div class="btn-opt">
                        <i class="fa-solid fa-house-chimney-user fa-7x" style="color:white" ></i>
                            <p class="paragraph">Manage My Properties</p>
                        </div>
                    </a>
                    <a class="btn-title" href="/profile/{{ $user->id }}">
                        <div class="btn-opt">
                        <i class="fa-solid fa-user-gear fa-7x" style="color:white"></i>
                            <p class="paragraph">Manage Account</p>
                        </div>
                    </a>
                    <a class="btn-title" href="/properties">
                    
                        <div class="btn-opt">
                        <img class="card-icon" src="/css/assets/white-home-icon.png" alt="">
                            <p class="paragraph">View All Properties</p>
                        </div>
                    </a>
                @endif   
              
                
            </section>
        </div>
    </div>
@endsection
