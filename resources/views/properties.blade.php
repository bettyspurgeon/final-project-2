@extends('templates/layoutTemplate')

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
  
        <strong>User_ : </strong> {{ $property->type }}<br>
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

        <strong>Picture: </strong> <img style="height: 250px; width: 250px;" src="{{ $property->pictures }}" alt=""></img><br>
       
        <a href="{{ route('properties.details', [$property->id]) }}">Details</a>
        <a href="{{ route('properties.edit', [$property->id]) }}">Edit</a>
        <a href="{{ route('properties.delete', [$property->id]) }}">Delete</a>
        <hr>
        
    @endforeach
@endsection