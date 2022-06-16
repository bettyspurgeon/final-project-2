@extends('templates/layoutTemplate')
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

    <div class="main-content">
    <div class="container">
    <div class="header">
            <h2>Registration Form</h2>
            </div>
    <form class="form" action="" method="POST">
        @csrf
        <label>Your Firstame</label>
        <input class="forminput" type="text" name="first_name" placeholder="first name"><br>
        <label>Your Lastame</label>
        <input class="forminput" type="text" name="last_name" placeholder="last name"><br>
        <label>Your Email</label>
        <input class="forminput" type="email" name="email" placeholder="email"><br>
        <label>Your Username</label>
        <input class="forminput" type="text" name="username" placeholder="username"><br>
        <label>Your Password</label>
        <input class="forminput" type="password" name="password" placeholder="password"><br>
        <label>Your ID</label>
        <select class="forminput" name="type" id="">
            <option disabled selected value> -- select an option -- </option>
            <option value="seller">Seller</option>
            <option value="buyer">Buyer</option>
            <option value="renter">Renter</option>
            <option value="landlord">Landlord</option>
        </select><br>
        <input class="forminput" id="btn" type="submit" value="Register">
    </form>
     </div>
    </div>
</div>

@endsection

