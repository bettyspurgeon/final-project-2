@extends('templates/layoutTemplate')
<link rel="stylesheet" href="{{asset('css/updateproperties.css')}}">
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

    <div class="properties-update-container "
    style=" padding: 1cm;"
    


        style="display: flex; display: flex;
    flex-direction: clomn; justify-content: space-around; align-items: center; margin:50px; height:80vh">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                @method('PUT')

              
                <strong>Type:</strong>
                <select id="" name="type">
                    <option value="{{ $property->type }}"> --Please choose an option--</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="share_flat">Share flat</option>
                </select>
                <br>
                <strong>Price:</strong> <input type="text" name="price" placeholder="Price"
                    value="{{ $property->price }}"><br>
                <strong>Location:</strong> <select id="" name="location" placeholder="Location">
                    <option value="{{ $property->location }}"> --Please choose a location--</option>
                    <option value="Balair">Balair</option>
                    <option value="Hollerich">Hollerich</option>
                    <option value="Gasperich">Gasperich</option>
                    <option value="Kirchberg">Kirchberg</option>
                    <option value="Gare">Gare</option>
                </select><br>

                <strong>Avalible:</strong> <input type="date" name="date_avaliable" placeholder="Date avaliable"
                    value="{{ $property->date_avaliable }}"><br>
                <strong>Land:</strong> <input type="text" name="area" placeholder="Area"
                    value="{{ $property->area }}"><br>
                <strong>Option:</strong><select id="" name="parking">
                    <option value="parking"> --Do you have parking space?--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <strong>Bedrooms:</strong> <input type="text" name="beedrooms" placeholder="Bedrooms"
                    value="{{ $property->bedrooms }}"><br>
                <strong>Bathrooms:</strong> <input type="text" name="bathrooms" placeholder="Bathrooms"
                    value="{{ $property->bathrooms }}"><br>

                <strong>Option:</Option></strong> <select id="" name="children"
                    value="{{ $property->children }}">
                    <option value="children "> --Do you allow kids live here?--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <strong>Option:</strong> <select id="" name="pets" value="{{ $property->pets }}">
                    <option value="pets"> --Do you allowed pets?--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>
                <strong>Description:</strong> <input type="text" name="description" placeholder="Description"
                    value="{{ $property->description }}"><br>
                <div>
                    <strong>Picture:</strong> <input type="file" name="pictures" value="{{ $property->pictures }}"
                        placeholder="Upload your pictures"><br>

                </div>

                <strong>Ready for update?</strong> <input type="submit" value="Update">
                <hr>
                <div class="properties_links">
                    <a href="{{"/myproperties/$property->user_id" }}">Back to My Properties</a>
                    <hr>
                </div>
            </div>


        </form>
    </div>
@endsection
