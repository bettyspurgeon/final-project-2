@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/user-preferences.css') }}">

@section('title', 'Manage Preferences')

@section('content')
<section class="preferenceform">
    <div class="main-content">
        <div class="container">
            <div class="screen_content">
                <h1 class="header">Manage Your Preferences as a Renter</h1>
                <div style="height: 40px;">
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
                    @if ($errors->any())
                        <div class="alert alert-danger" style="color:red">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                
                    <form class="form" action="" method="POST">
                        @csrf
                        <input class="forminput" type="text" name="price_lowest" placeholder="Min Price"><br>
                        <input class="forminput" type="text" name="price_highest" placeholder="Max Price"><br>
                        <input class="forminput" type="text" placeholder="Location" name="location"><br>
                        <input class="forminput" type="number" placeholder="Bedrooms" name="bedrooms"><br>
                        <input class="forminput" type="number" placeholder="Bathrooms" name="bathrooms"><br>

                        <div class="ratios-container"> 
                            <p>Will children be living with you?</p> 
                            <input type="radio" id="children-yes" name="children" value="1">
                            <label for="children">Yes</label> <br>
                            <input type="radio" id="children-no" name="children" value="0">
                            <label for="children-no">No</label><br>

                            <p>Will pets living with you?</p>
                            
                            <input type="radio" id="pets-yes" name="pets" value="1">
                            <label for="pets-yes">Yes</label><br>
                            <input type="radio" id="pets-no" name="pets" value="0">
                            <label for="pets-no">No</label><br>  

                            <p>Does your space need to have parking?</p>
                            <input type="radio" id="parking-yes" name="parking" value="1">
                            <label for="parking-yes">Yes</label><br>
                            <input type="radio" id="parking-no" name="parking" value="0">
                            <label for="parking-no">No</label><br>
                        </div>  
                        <input class="forminput" id="btn" type="submit" value="Update Preferences">
                    </form> 
            </div> 
                <div class="screen_background">
                        <span class="screen_bg_shape screen_bg_shape4"></span>
                        <span class="screen_bg_shape screen_bg_shape3"></span>
                        <span class="screen_bg_shape screen_bg_shape2"></span>
                        <span class="screen_bg_shape screen_bg_shape1"></span>
                </div>
        </div>
    </div>
</section>

@endsection
