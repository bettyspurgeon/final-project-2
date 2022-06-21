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

    <div class="main-content">
    <div class="container">
    <div class="header">
            <h1>Registration Form</h1>
            </div>
    <form class="form" action="" method="POST">
        @csrf
          <strong>Your Firstame</strong>
        <input class="forminput" type="text" name="first_name" placeholder="first name"><br>
        <strong>Your Lastame</strong>
        <input class="forminput" type="text" name="last_name" placeholder="last name"><br>
        <strong>Your Email</strong> 
        <input class="forminput" type="email" name="email" placeholder="email"><br>
        <strong>Your Username</strong>
        <input class="forminput" type="text" name="username" placeholder="username"><br>
         <strong>Your Password</strong>
        <input class="forminput" type="password" name="password" placeholder="password"><br>
        <strong>Your ID</strong>
        <select class="forminput" name="type" id="">
            <option disabled selected value> Select an option </option>
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

