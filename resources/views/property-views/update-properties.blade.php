@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/updateproperties.css') }}">
@section('title', 'Insert new property')

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

    <section class="properties-update-container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-container">
                @method('PUT')
                <h1>Update a property</h1>

                <strong>Type:</strong>
                <select id="" name="type">
                    <option value="{{ $property->type }}"> Please choose an option</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="share_flat">Share flat</option>
                </select>
                <br>
                <strong>Price {{ $property->purpose == 'rent' ? '€/Per Month' : '' }}: </strong> <input type="text"
                    name="price" placeholder="Price" value="{{ $property->price }}"><br>
                <strong>Location:</strong> <select id="" name="location" placeholder="Location">
                    <option value="{{ $property->location }}"> Please choose a location</option>
                    <option value="Belair">Belair</option>
                    <option value="Hollerich">Hollerich</option>
                    <option value="Gasperich">Gasperich</option>
                    <option value="Kirchberg">Kirchberg</option>
                    <option value="Gare">Gare</option>
                </select><br>

                <strong>Available:</strong> <input type="date" name="date_avaliable" placeholder="Date avaliable"
                    value="{{ $property->date_avaliable }}"><br>
                <strong>Bedrooms:</strong> <input type="text" name="bedrooms" placeholder="Bedrooms"
                    value="{{ $property->bedrooms }}"><br>
                <strong>Bathrooms:</strong> <input type="text" name="bathrooms" placeholder="Bathrooms"
                    value="{{ $property->bathrooms }}"><br>
                <strong>Is there a parking space:</strong><select id="" name="parking">
                    <option value="parking">Is there a parking space?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <strong>Do you allow children to live here:</Option></strong> <select id="" name="children"
                    value="{{ $property->children }}">
                    <option value="children ">Do you allow kids?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <strong>Do you allow animals to live here:</strong> <select id="" name="pets"
                    value="{{ $property->pets }}">
                    <option value="pets">Do you allow pets?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>
                <label for="description">Please provide a short description:</label> <input type="text"
                    name="description" placeholder="Description" value="{{ $property->description }}"><br>
                <div>
                    <label for="pictures">Plese provide a picture:</label> <input type="file" name="pictures"
                        value="{{ $property->pictures }}" placeholder="Upload your pictures"><br>
                </div>

                <label for="submit-btn">Please review carefully and click when ready to update.</label><br>
                <input type="submit" name="submit-btn" value="Update" class="submit-btn">
            </div>
        </form>
        <div class="properties-links">
            <a href="{{ "/myproperties/$property->user_id" }}">Back to Properties</a>

        </div>
    </section>
@endsection
