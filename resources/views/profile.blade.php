@extends('templates/layoutTemplate')

@section('title', 'Manage Account')

@section('content')
    <h2>Manage Account Information</h2>
    @if (session('success'))
        <div class="alert alert-success" style="color: green">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-success" style="color: red">
            {{ session('error') }}
        </div>
    @endif
    <div class="main-content">
        <form action="" method="POST">
            @csrf
            <input type="text" name="first_name" value="{{$user->first_name}}"><br>
            <input type="text" name="last_name" value="{{$user->last_name}}"><br>
            <input type="email" name="email" value="{{$user->email}}"><br>
            <input type="text" name="username" value="{{$user->username}}"><br>
            <select name="type" id="">
                <option disabled selected value> {{$user->type}} </option>
                <option value="seller">Seller</option>
                <option value="buyer">Buyer</option>
                <option value="renter">Renter</option>
                <option value="landlord">Landlord</option>
            </select><br>
            <input type="submit" value="Update Info">
        </form>
    </div>
@endsection
