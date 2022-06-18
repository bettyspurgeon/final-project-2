@extends('templates/layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/properties.css') }}">
@section('title', 'Properties List')

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

@foreach ($properties as $property)

<div class="properties_container" style="display: flex; display: flex;
    flex-direction: row; justify-content: space-evenly; align-items: center;">

    <div class="properties_picture">
        <strong>Picture: </strong> <br>
         <!-- <img style= "height: 250px; width: 250px;" src="{{ $property->pictures }}" alt=""></img><br> -->
         <img style= "height: 250px; width: 250px;" src="uploads/{{ $property->pictures }}" alt=""></img><br>
    </div>
    <div class="properties_description">
        <strong>Type : </strong> {{ $property->type }}<br>
        <strong>Price : </strong> {{ $property->price }}<br>
        <strong>Location : </strong> {{$property->location}}<br>
        <strong>Date_avaliable: </strong> {{ $property->date_avaliable}}<br>
        <strong>Area: </strong> {{ $property->area }}<br>
        <strong>Bedrooms : </strong> {{ $property->bedrooms }}<br>
        <strong>Bathrooms : </strong> {{ $property->bathrooms }}<br>
        <strong>Children: </strong> {{ $property->children }}<br>
        <strong>Pets: </strong> {{ $property->pets }}<br>
        <strong>Descripation : </strong> {{ $property->description }}<br>
    <hr>
        <div class="properties_links">
        <a href="{{ route('properties.details', [$property->id]) }}">Details</a>
        
        <hr>
    </div>

    </div>

   
</div>


@endforeach
@endsection