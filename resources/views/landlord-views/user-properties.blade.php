@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/user-properties.css') }}">
@section('title', 'Manage Properties')

@section('content')
    <section class="manage-properties-content">
        <h1 class="properties-header">Manage My Properties</h1>
        <div class="properties-container">
            @foreach ($properties as $property)
                <div class="property-card">
                    <div class="property-image"style='background-image: url({{ asset("uploads/$property->pictures") }})'>
                    </div>

                    <div class="property-description">
                        <p>Address: {{ $property->house_number }} {{ $property->street_name }}</p>
                        <p>Location: {{ $property->location }}
                        </p>
                        <p>Type: {{ ucfirst($property->type) }}</p>
                        <div class="property-links">
                            <a href="{{ route('properties.edit', [$property->id]) }}" class="property-link">Edit Information</a>
                            <a href="{{ route('properties.delete', [$property->id]) }}" class="property-link">Delete This Property</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="add-property-prompt" style=" display:flex; flex-direction: column; gap: 1.5rem; text-align:center">
            <h3>You have {{ count($properties) }} properties! Would you like to add another?</h3>
            <a href="/properties/create"><button
                    style="border: none; background-color:green; padding: 1rem 1.5rem; color: white; font-size: 1rem; border-radius: 1.5rem; cursor: pointer;">Add
                    New Property</button></a>
        </div>
    </section>
@endsection
