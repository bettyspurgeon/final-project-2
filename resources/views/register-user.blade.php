@extends('templates/layoutTemplate')

@section('content')
    <form action="" method="POST">
        @csrf
        <input type="text" name="first_name" placeholder="first name"><br>
        <input type="text" name="last_name" placeholder="last name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <select name="type" id="">
            <option disabled selected value> -- select an option -- </option>
            <option value="seller">Seller</option>
            <option value="buyer">Buyer</option>
            <option value="renter">Renter</option>
            <option value="landlord">Landlord</option>
        </select><br>
        <input type="submit" value="Register">
    </form>
@endsection
