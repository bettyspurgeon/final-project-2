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
<form action="" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="properties_create_container" style="display: flex; display: flex;
    flex-direction: clomn; justify-content: space-around; align-items: center; margin:80px">
        <div>
        <strong>Type:</strong> <select id="" name="type">
                <option value="type"> --Please choose an option--</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="share_flat">Share flat</option>
            </select><<br>
               <strong>Price:</strong> <input type="text" name="price" placeholder="Price"><br>
               <strong>Name:</strong> <select id="" name="location">
               <strong>Location:</strong> <option value="location"> --Please choose a location--</option>
                <option value="Balair">Balair</option>
                <option value="Hollerich">Hollerich</option>
                <option value="Gasperich">Gasperich</option>
                <option value="Kirchberg">Kirchberg</option>
                <option value="Gare">Gare</option>
            </select><br>
            <strong>Avaiable:</strong> <input type="date" name="date_avaliable" placeholder="Date avaliable"><br>
            <strong>Land:</strong> <input type="text" name="area" placeholder="Area"><br>
            <strong>Parking:</strong>  <input type="text" name="parking" placeholder="Parking"><br>
            <strong>Bedrooms:</strong> <input type="text" name="bedrooms" placeholder="Bedrooms"><br>
            <strong>Bathrooms:</strong> <input type="text" name="bathrooms" placeholder="Bathrooms"><br>
            <strong>Option:</strong> <select id="" name="children" >
                    <option value="children "> --Do you live with your kids?--</option>
                    <option value="0">I don't have kids at this moment!</option>
                    <option value="1">I live with my children!</option>
                </select><br>
                <strong>Option:</strong> <select id="" name="pets">
                    <option value="pets"> --Please choose an option--</option>
                    <option value="0">I don't have pets!</option>
                    <option value="1">I have pets!</option>
                </select>
                <br>
                <strong>Description:</strong>   <input type="text" name="description" placeholder="Discription"><br>
                    <div>
                    <strong>Pricture:</strong>  <input type="file" name="pictures" value="Upload your pictures" placeholder="Upload your pictures"><br>      
                    </div>
                    <strong>Ready ?</strong>  <input type="submit" value="Insert">
                    
        </div>


       
</form>

@endsection