@extends('templates/layoutTemplate')

@section('title', 'Insert new property')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        @method('PUT')
        <select id=""  name="type" >  
         <option value="{{ $property->type }}"> --Please choose an option--</option>
         <option value="apartment">Apartment</option>
         <option value="house">House</option>
         <option value="share_flat">Share flat</option>
        </select><<br>
        <input type="text" name="price" placeholder="Price" value="{{ $property->price }}"><br>
        <input type="text" name="location" placeholder="Location" value="{{ $property->location }}"><br>
        <input type="text" name="date_aviliable" placeholder="Date aviliable" value="{{ $property->date_aviliable }}"><br>
        <input type="text" name="area" placeholder="Area" value="{{ $property->area }}"><br>
        <input type="text" name="parking" placeholder="Parking" value="{{ $property->parking}}"><br>
        <input type="text" name="beedrooms" placeholder="Bedrooms" value="{{ $property->bedrooms }}"><br>
        <input type="text" name="bathrooms" placeholder="Bathrooms" value="{{ $property->bathrooms }}"><br>
        <input type="text" name="children" placeholder="Children" value="{{ $property->childern }}"><br>
        <input type="text" name="pets" placeholder="Pets" value="{{ $property->pets }}"><br>
        <input type="text" name="descripation" placeholder="Discripation" value="{{ $property->discripation }}"><br>
        <input type="text" name="picture" placeholder="Picture" value="{{ $property->picture }}"><br>
     
        <input type="submit" value="Update">
    </form>
@endsection