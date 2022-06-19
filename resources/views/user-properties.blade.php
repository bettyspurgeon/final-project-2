@extends('templates/layoutTemplate')

@section('title', 'Manage Properties')

@section('content')
    <h1>Manage My Properties</h1>
    <div class="properties-container">
        @foreach ($properties as $property)
            <img src="uploads/{{ $property->pictures }}" alt="">
            <div class="property-description">
                <p><strong>Location:</strong>{{ $property->location }}
                </p>
            </div>
            @endforeach
    </div>
@endsection
