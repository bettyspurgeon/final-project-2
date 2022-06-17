@extends('templates/layoutTemplate')

@section('title', 'property Details')

@section('content')
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

        <strong>Type : </strong> {{ $property->type }}<br>
        <strong>Price : </strong> {{ $property->price }}<br>
        <strong>Location : </strong> {{$property->location}}<br>
        <strong>Date_aviliable: </strong> {{ $property->date_aviliable}}<br>
        <strong>Area: </strong> {{ $property->area }}<br>

        <strong>Parking : </strong> {{ $property->parking }}<br>
        <strong>Bedrooms : </strong> {{ $property->bedrooms }}<br>
        <strong>Bathrooms : </strong> {{ $property->bathrooms }}<br>
        <strong>Children: </strong> {{ $property->children }}<br>
        <strong>Pets: </strong> {{ $property->pets }}<br>
        <strong>Description : </strong> {{ $property->description}}<br>
        <strong>Picture: </strong> {{ $property->pictures }}<br>
    <hr>

   
@endsection