@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@section('content')

<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</div>

<section class="loginform">
    <div class="main-content">
        <div class="container">
            <div class="screen_content">
                <div class="header">
                    <h1>Registration</h1>
                </div>
                <form class="form" action="" method="POST">
                    @csrf
                    <!-- <strong>Your Firstame</strong> -->
                    <input class="forminput" type="text" name="first_name" placeholder="First name"><br>
                    <!-- <strong>Your Lastame</strong> -->
                    <input class="forminput" type="text" name="last_name" placeholder="Last name"><br>
                    <!-- <strong>Your Email</strong>  -->
                    <input class="forminput" type="email" name="email" placeholder="Email"><br>
                    <!-- <strong>Your Username</strong> -->
                    <input class="forminput" type="text" name="username" placeholder="Username"><br>
                    <!-- <strong>Your Password</strong> -->
                    <input class="forminput" type="password" name="password" placeholder="Password"><br>
                    <!-- <strong>Your ID</strong> -->
                    <select class="forminput" name="type" id="type-opt">
                        <option disabled selected value> Your ID</option>
                        <option value="seller">Seller</option>
                        <option value="buyer">Buyer</option>
                        <option value="renter">Renter</option>
                        <option value="landlord">Landlord</option>
                    </select><br>
                    <input class="forminput" id="btn" type="submit" value="Register">
                </form>
            </div>
            <div class="screen_background">
                <span class="screen_bg_shape screen_bg_shape4"></span>
                <span class="screen_bg_shape screen_bg_shape3"></span>
                <span class="screen_bg_shape screen_bg_shape2"></span>
                <span class="screen_bg_shape screen_bg_shape1"></span>
            </div>

        </div>
    </div>


    </div>
</section>





























@endsection