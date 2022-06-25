@extends('templates.layoutTemplate')

@section('title', 'Insert new landlordpreference')

@section('content')
    <h1 class="contract">Update Tenant Preference For {{ $property->house_number . ' ' . $property->street_name }}</h1>
    <form action="" method="post" id="myForm" enctype="multipart/form-data">
        @csrf
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
        <div class="properties_create_container">
            <div>
                <strong>Type:</strong> <select id="" name="contract">
                    <option value="{{ $landlordpreference->contract }}"> {{ $landlordpreference->contract }}</option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="None">None</option>
                </select>
                <br>
                <strong>Income:</strong><input type="text" name="income"
                    placeholder="{{ $landlordpreference->income }}"><br>

            </div>
            <strong>Please Review your selections carefully before submitting!</strong><br>
            <input type="submit" value="Enter Selections">
            <div>
                <a href="/landlordpreference">Go Back</a>
                <hr>
            </div>
        </div>
        </div>
    </form>

@endsection
