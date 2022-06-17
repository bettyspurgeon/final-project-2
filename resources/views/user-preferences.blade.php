@extends('templates/layoutTemplate')

@section('title', 'Manage Preferences')

@section('content')
    <div style="padding-top: 100px;">
        <h2>Manage Your Preferences as a Renter</h2>
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
        </div>
        <form action="" method="POST">
            @csrf
            <input type="text" name="price_lowest" placeholder="Min Price"><br>
            <input type="text" name="price_highest" placeholder="Max Price"><br>
            <input type="text" placeholder="Location" name="location"><br>
            <input type="number" placeholder="Bedrooms" name="bedrooms"><br>
            <input type="number" placeholder="Bathrooms" name="bathrooms"><br>

            <p>Will children be living with you?</p>
            <input type="radio" id="children-yes" name="children" value="1">
            <label for="children">Yes</label><br>
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

            <input type="submit" value="Update Preferences">

        </form>
    </div>

@endsection
