@extends('templates.layoutTemplate')
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

<div class="big-container">

    <div class="properties-container">
        <div class="properties-picture">
            <!-- <strong>Picture: </strong> <br> -->
            <img class="properties-img" src="uploads/{{ $property->pictures }}" alt=""></img><br>
        </div>
        <div class="properties-description">
            <div class="wrapper-1">
                <strong>Type : </strong><p class="p-description"> {{ $property->type }}</p><br>
                <strong>Price : </strong><p class="p-description"> {{ $property->price }}</p><br>
                <strong>Location : </strong><p class="p-description"> {{$property->location}}</p><br>
                <strong>Date_available: </strong><p class="p-description"> {{ $property->date_avaliable}}</p><br>
                <strong>Area: </strong><p class="p-description"> {{ $property->area }}</p><br>
            </div>
            <div class="wrapper-2">
                <strong>Bedrooms : </strong><p class="p-description"> {{ $property->bedrooms }}</p><br>
                <strong>Bathrooms : </strong><p class="p-description"> {{ $property->bathrooms }}</p><br>
                <strong>Children: </strong><p class="p-description">  {{ $property->children >= 1 ? 'Yes' : 'No' }} </p><br>
                <strong>Pets: </strong><p></p class="p-description"> {{ $property->pets >= 1 ? 'Yes' : 'No' }}</p><br>
                <strong>Description : </strong><p class="p-description"> {{ $property->description }}</p><br>
            </div>
        </div>

        <div class="properties-links">
            <a class="properties-a-link" href="{{ route('properties.details', [$property->id]) }}">Details</a> 
        </div>
     
    </div>
</div>


@endforeach
@endsection

