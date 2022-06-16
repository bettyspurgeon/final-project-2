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

    <h2>Create new property</h2>
    <form action="" method="POST" id="myForm">
        @csrf

        <select id=""  name="type" >  
         <option value="type"> --Please choose an option--</option>
         <option value="apartment">Apartment</option>
         <option value="house">House</option>
         <option value="share_flat">Share flat</option>
        </select><<br>
        <input type="text" name="price" placeholder="Price"><br>
        <input type="text" name="location" placeholder="Location"><br>
        <input type="date" name="date_avaliable" placeholder="Date avaliable"><br>
        <input type="text" name="area" placeholder="Area"><br>
        <input type="text" name="parking" placeholder="Parking"><br>
        <input type="text" name="bedrooms" placeholder="Bedrooms"><br>
        <input type="text" name="bathrooms" placeholder="Bathrooms"><br>
        <input type="text" name="children" placeholder="Children"><br>
        <select id=""  name="pets" >  
         <option value="pets"> --Please choose an option--</option>
         <option value="0">I don't have pets!</option>
         <option value="1">I have pets!</option>
        </select><<br>
        <input type="text" name="descripation" placeholder="Discripation"><br>
        <input type="text" name="picture" placeholder="Picture"><br>
        
        <input type="submit" value="Insert">
    </form>

@endsection
