@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/properties.css') }}">
@section('title', 'Properties List')

@section('content')
    <section class="property-cards-container">
        @foreach ($properties as $property)
            <div class="property-card">
                <div class="property-picture" style="background-image: url('uploads/{{ $property->pictures }}')">
                </div>
                <div class="property-info-container">
                    <p>Type: {{ ucfirst($property->type) }}</p>
                    <p> Price:
                        {{ $property->purpose == 'rent' ? $property->price . '€/Per Month' : $property->price . '€' }}</p>

                    <p>Location: {{ $property->location }}</p>

                    <p> Date Avaliable: {{ $property->date_avaliable }}</p><br>
                    
                        <a class="details-link" href="{{ route('properties.details', [$property->id]) }}">Details</a>
                  
                </div>

                {{-- <div class="landlord_preferences">
                    <h4>Landlord Request</h4>
                    <strong>Contract : </strong> {{ $property->contract }}<br>
                    <strong>Income : </strong> {{ $property->income }}<br>
                </div> --}}
            </div>
        @endforeach
    </section>
@endsection
