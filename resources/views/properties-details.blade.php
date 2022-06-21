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

<div class="properties_container" style="display: flex; display: flex;
    flex-direction: row; justify-content: space-around; align-items: center;">

    <div class="properties_picture">
        <strong>Picture: </strong> <br>
        <img style="height: 400px; width: 400px;" src="/uploads/{{ $property->pictures }}" alt=""></img><br>
    </div>

    <div class="properties_description">

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


        <div>
            <hr>
            <a href="/properties">See More Properties</a>
            <a href="{{ route('properties.edit', [$property->id]) }}">Edit</a>
            <a href="{{ route('properties.delete', [$property->id]) }}">Delete</a>
            <hr>
            <a href="/properties/create">Add Properties</a>
            <hr>


        </div>
        <div>
            <div class="landlord_preference">
                <h4>Landlord Request
                </h4>
                <strong>Contract : </strong> {{ $property->contract }}<br>
                <strong>Income : </strong> {{ $property->income }}<br>
                <hr>
            </div>
        </div>

        @endsection