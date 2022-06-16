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
    <div class="formblock">
    <form class="form" action="" method="POST">
        @csrf
        <input class="forminput" type="text" name="first_name" placeholder="first name"><br>
        <input class="forminput" type="text" name="last_name" placeholder="last name"><br>
        <input class="forminput" type="email" name="email" placeholder="email"><br>
        <input class="forminput" type="text" name="username" placeholder="username"><br>
        <input class="forminput" type="password" name="password" placeholder="password"><br>
        <select class="forminput" name="type" id="">
            <option disabled selected value> -- select an option -- </option>
            <option value="seller">Seller</option>
            <option value="buyer">Buyer</option>
            <option value="renter">Renter</option>
            <option value="landlord">Landlord</option>
        </select><br>
        <input class="forminput" type="submit" value="Register">
    </form></div>
@endsection

