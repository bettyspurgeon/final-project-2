@extends('templates.layoutTemplate')

@section('content')
@foreach ($complete_matches as $complete_match)

<div class="big-container">

            <div class="properties-container">
                <div class="properties-picture">
                    <img class="properties-img" src="uploads/{{ $complete_match->pictures }}" alt=""></img><br>

                </div>
                <div class="properties-description">
                    <div class="wrapper-1">

                        <strong>Type : </strong>
                        <p class="p-description"> {{ $complete_match->type }}</p><br>
                        <strong>Price : </strong>
                        <p class="p-description"> {{ $complete_match->price }}</p><br>
                        <strong>Location : </strong>
                        <p class="p-description"> {{ $complete_match->location }}</p><br>
                        <strong>Date_avaliable: </strong>
                        <p class="p-description"> {{ $complete_match->date_avaliable }}</p><br>
                        <strong>Area: </strong>
                        <p class="p-description"> {{ $complete_match->area }}</p><br>
                    </div>
                    <div class="wrapper-2">
                        <strong>Bedrooms : </strong>
                        <p class="p-description"> {{ $complete_match->bedrooms }}</p><br>
                        <strong>Bathrooms : </strong>
                        <p class="p-description"> {{ $complete_match->bathrooms }}</p><br>
                        <strong>Children: </strong>
                        <p class="p-description"> {{ $complete_match->children }}</p><br>
                        <strong>Pets: </strong>
                        <p></p class="p-description"> {{ $complete_match->pets }}</p><br>
                        <strong>Descripation : </strong>
                        <p class="p-description"> {{ $complete_match->description }}</p><br>


                    </div>

                </div>

                <div class="properties-links">
                    <a class="properties-a-link" href="{{ route('properties.details', [$complete_match->id]) }}">Details</a>
                </div>
                
            </div>
        </div>
    @endforeach
@endsection