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
    <div class="properties_update_container" style="display: flex; display: flex;
    flex-direction: clomn; justify-content: space-around; align-items: center; margin:50px">
        <div>
            @method('PUT')


            <strong>Type:</strong> <select id="" name="type" enctype="multipart/form-data">
                <option value="{{ $property->type }}"> --Please choose an option--</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="share_flat">Share flat</option>
            </select>
            <<br>
                <strong>Price:</strong> <input type="text" name="price" placeholder="Price" value="{{ $property->price }}"><br>
                <strong>Location:</strong> <select id="" name="location" placeholder="Location">
                    <option value="{{ $property->location }}"> --Please choose a location--</option>
                    <option value="Balair">Balair</option>
                    <option value="Hollerich">Hollerich</option>
                    <option value="Gasperich">Gasperich</option>
                    <option value="Kirchberg">Kirchberg</option>
                    <option value="Gare">Gare</option>
                </select><br>

                <strong>Avalible:</strong> <input type="date" name="date_avaliable" placeholder="Date avaliable" value="{{ $property->date_avaliable }}"><br>
                <strong>Land:</strong> <input type="text" name="area" placeholder="Area" value="{{ $property->area }}"><br>
                <strong>Parking:</strong> <input type="text" name="parking" placeholder="Parking" value="{{ $property->parking}}"><br>
                <strong>Bedrooms:</strong> <input type="text" name="beedrooms" placeholder="Bedrooms" value="{{ $property->bedrooms }}"><br>
                <strong>Bathrooms:</strong> <input type="text" name="bathrooms" placeholder="Bathrooms" value="{{ $property->bathrooms }}"><br>

                <strong>Option:</Option>:</strong> <select id="" name="children" value="{{ $property->children }}">
                    <option value="{{ $property->children }}"> --Do you live with your kids?--</option>
                    <option value="0">I don't have kids at this moment!</option>
                    <option value="1">I live with my children!</option>
                </select><br>

                <strong>Option:</strong> <select id="" name="pets" value="{{ $property->pets }}">
                    <option value="{{ $property->pets }}"> --Do you have pets?--</option>
                    <option value="0">I don't have pets!</option>
                    <option value="1">I have pets!</option>
                </select><br>
                <strong>Description:</strong> <input type="text" name="description" placeholder="Description" value="{{ $property->description }}"><br>
                <div>
                    <strong>Picture:</strong> <input type="file" name="pictures" value="{{ $property->pictures }}" placeholder="Upload your pictures"><br>

                </div>

                <strong>Ready for update?</strong> <input type="submit" value="Update">
        </div>

    </div>
</form>
@endsection