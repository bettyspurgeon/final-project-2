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


            <select id="" name="type" enctype="multipart/form-data">
                <option value="{{ $property->type }}"> --Please choose an option--</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="share_flat">Share flat</option>
            </select>
            <<br>
                <input type="text" name="price" placeholder="Price" value="{{ $property->price }}"><br>
                <input type="text" name="location" placeholder="Location" value="{{ $property->location }}"><br>
                <input type="date" name="date_avaliable" placeholder="Date avaliable" value="{{ $property->date_avaliable }}"><br>
                <input type="text" name="area" placeholder="Area" value="{{ $property->area }}"><br>
                <input type="text" name="parking" placeholder="Parking" value="{{ $property->parking}}"><br>
                <input type="text" name="beedrooms" placeholder="Bedrooms" value="{{ $property->bedrooms }}"><br>
                <input type="text" name="bathrooms" placeholder="Bathrooms" value="{{ $property->bathrooms }}"><br>
                <input type="text" name="children" placeholder="Children" value="{{ $property->childern }}"><br>
                <input type="text" name="pets" placeholder="Pets" value="{{ $property->pets }}"><br>
                <input type="text" name="description" placeholder="Discription" value="{{ $property->discription }}"><br>
                <div>
                    <input type="file" name="pictures" value="{{ $property->discription }}" placeholder="Upload your pictures"><br>

                </div>

                <input type="submit" value="Update">
        </div>

    </div>
</form>
@endsection