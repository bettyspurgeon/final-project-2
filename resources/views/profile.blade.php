@extends('templates/layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@section('title', 'Manage Account')

@section('content')
<div class="main-container">
    <div class="container">
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
                <input type="email" name="email" value="{{$user->email}}">
                <input type="text" name="username" value="{{$user->username}}"><br>
                <input type="text" name="salary" placeholder="My Salary (Per Month)" value="">
                <input type="text" placeholder="My Contract Type" name="contract-type">
                <select name="contract" id="">
                    <option disabled selected value> {{$user->type}} </option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="None">None</option>
    
                </select><br>
                <select name="type" id="">
                    <option disabled selected value> {{$user->type}} </option>
                    <option value="seller">Seller</option>
                    <option value="buyer">Buyer</option>
                    <option value="renter">Renter</option>
                    <option value="landlord">Landlord</option>
                </select><br>
                <p><a href="/forget-password">Change Password</a></p>
                <div>
                    <strong>Upload your contract or proof of employment with salary:</strong> <input type="file" name="user-documents"value="upload"><br>
                </div>
                <button type="submit" class="submitBtn">Update Info</button>
            </form>
            <a href="/preferences/{{$user->id}}"><h2>Click to Manage Preferences</h2></a>
            <a href="/user-profile"><h2>Click to Manage My Documents and Information</h2></a>
        </div>
    </div>
</div>
@endsection
