@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/property-details.css') }}">
@section('title', 'property Details')

@section('content')

    <div class="property-container" style="">

        <div class="property-picture" style="background-image: url({{ asset("uploads/$property->pictures") }})">

            {{-- <img style="" src="{{ asset('uploads/' . $property->pictures) }}" alt=""></img><br> --}}
        </div>

        <div class="property-description">
            <h3 class="information-header">Here are the Important Details!</h3>
            <div class="property-info-container">
                <div class="property-info">
                    <strong>Type : </strong> {{ ucfirst($property->type) }}<br>
                    <strong>Price : </strong>
                    {{ $property->purpose == 'rent' ? $property->price . '€/Per Month' : $property->price . '€' }}<br>
                    <strong>Location : </strong> {{ $property->location }}<br>
                    <strong>Date_available: </strong> {{ $property->date_avaliable }}<br>

                    <strong>Parking : </strong> {{ $property->parking = 1 ? 'Yes' : 'No' }}<br>
                    <strong>Bedrooms : </strong> {{ $property->bedrooms }}<br>
                    <strong>Bathrooms : </strong> {{ $property->bathrooms }}<br>
                    <strong>Children: </strong> {{ $property->children = 1 ? 'Yes' : 'No' }}<br>
                    <strong>Pets: </strong> {{ $property->pets = 1 ? 'Yes' : 'No' }}<br>
                    <strong>Description : </strong> {{ $property->description }}<br>
                </div>

                <div class="landlord-preferences">
                    <h4>Landlord Request</h4>
                <p>Contract : {{ $property->contract }} </p>
                    <p>Income :  {{ $property->income }}</p>
                </div>

            </div>
        </div>
        <div class="map-container">
            <h3>The Neighbourhood:</h3>
            <iframe style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/view?key=AIzaSyA0MAOg9gkDSlSBTc11ZLa2-TZupNytSxc&center={{ $property->latitude }},{{ $property->longitude }}&zoom=15">
            </iframe>
        </div>
          <div class="properties-link">
                <a href="/properties">Back to Properties</a>
            </div>
    </div>


@endsection
