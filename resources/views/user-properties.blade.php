@extends('templates/layoutTemplate')

@section('title', 'Manage Properties')

@section('content')
    <section class="manage-properties-content" style="height:90vh; width: 100%; padding-top: 2rem;">
        <h1 style="text-align: center;">Manage My Properties</h1>
        <div class="properties-container"
            style="display: flex; flex-direction: row; align-items:center; justify-content: space-evenly; gap: 20px; margin: 1rem 3rem; flex-wrap: wrap;">
            @foreach ($properties as $property)
                <div class="property-description" style="border: 1px solid black; padding: 1rem; width: 25%;">
                    <img src="uploads/{{ $property->pictures }}" alt="">
                    <p><strong>Address:</strong></p>
                    <p><strong>Location:</strong>{{ $property->location }}
                    </p>
                    <div class="propety-links">
                        <a href="{{ route('properties.edit', [$property->id]) }}">Edit Information</a>
                        <a href="{{ route('properties.delete', [$property->id]) }}">Delete This Property</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="add-property-prompt" style=" display:flex; flex-direction: column; gap: 1.5rem; text-align:center">
            <h3>You have {{ count($properties) }} properties! Would you like to add another?</h3>
            <a href="/properties/create" ><button style="border: none; background-color:green; padding: 1rem 1.5rem; color: white; font-size: 1rem; border-radius: 1.5rem; cursor: pointer;">Add New Property</button></a>
        </div>
    </section>
@endsection
