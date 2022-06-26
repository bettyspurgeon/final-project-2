@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/newproperties.css') }}">
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


    <form action="" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="properties_create_container">
            <div>
                <h1 class="contactus">Create new property</h1>
                <strong>Type:</strong> <select id="" name="type">
                    <option disabled selected value>Please choose a type</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="flat share">Flat Share</option>
                </select>
                <br>
                <strong>Price:</strong> <input type="text" name="price" placeholder="Price"><br>
                <Strong>House Number:</Strong><input type="number" name="house_number" placeholder="House Number"><br>
                <Strong>Street Name:</Strong>
                <input type="text" name="street_name">
                <Strong>Post Code:</Strong>
                <input type="number" name="post_code">
                <strong>Location:</strong>
                <select id="" name="location">
                    
                    <option disabled selected value> Please choose a location</option>
                    <option value="Belair">Belair</option>
                    <option value="Hollerich">Hollerich</option>
                    <option value="Strassen">Strassen</option>
                    <option value="Kirchberg">Kirchberg</option>
                    <option value="Gare">Gare</option>
                </select><br>
                <strong>Available:</strong> <input type="date" name="date_avaliable" placeholder="Date avaliable"><br>
                <strong>Does this Property have a parking space?</strong><select id="" name="parking">
                    <option value="parking"> Parking Space</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <strong>Bedrooms:</strong> <input type="text" name="bedrooms" placeholder="Bedrooms"><br>
                <strong>Bathrooms:</strong> <input type="text" name="bathrooms" placeholder="Bathrooms"><br>
                <strong>Do you allow children to live here?</strong> 
                <select id="" name="children">
                    <option disabled selected value>Children</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>
                <strong>Do you allow pets to live here?</strong> 
                <select id="" name="pets">
                    <option disabled selected value>Pets</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <br>
                <strong>Description:</strong> <input type="text" name="description" placeholder="Description"><br>
                <div>
                    <strong>Picture:</strong> <input type="file" name="pictures" value="Upload your pictures"
                        placeholder="Upload your pictures"><br>
                </div>
                <strong>Ready ?</strong> <input type="submit" value="Insert">
                <div class="properties_links">
                    <a class="goback" href="/properties">Go Back</a>



                </div>
            </div>



    </form>

@endsection
