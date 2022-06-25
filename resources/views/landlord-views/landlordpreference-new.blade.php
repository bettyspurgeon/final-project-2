@extends('templates.layoutTemplate')

@section('title', 'Insert new landlordpreference')

@section('content')
    <h1 class="contract">Create Tenant Preferences for
        {{ $property->house_number . ' ' . $property->street_name }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
    <form action="" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf

        <label for="contract">Contract Type:</label>
        <select id="" name="contract">
            <option disabled selected value> --Please choose an option--</option>
            <option value="CDI">CDI</option>
            <option value="CDD">CDD</option>
            <option value="None">None</option>
        </select>
        <br>
        <label for="income">Income Per Month:</label><input type="number" name="income" placeholder="Income"><br>

        <p>Please carefully review your selections before submitting!</p>
        <input type="submit" value="Submit My Preferences"><br>

        <a href='{{ "/myproperties/$property->user_id" }}'>Return to My Properties</a>
        <hr>

        </div>
        </div>
    </form>

@endsection
