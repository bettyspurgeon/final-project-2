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
        <input type="text" name="date_aviliable" placeholder="Date aviliable"><br>
        <input type="text" name="area" placeholder="Area"><br>
        <input type="text" name="parking" placeholder="Parking"><br>
        <input type="text" name="beedrooms" placeholder="Bedrooms"><br>
        <input type="text" name="bathrooms" placeholder="Bathrooms"><br>
        <input type="checkbox" name="children" placeholder="Children"><br>
        <input type="checkbox" name="pets" placeholder="Pets" ><br>
        <input type="text" name="descripation" placeholder="Discripation"><br>
        <input type="text" name="picture" placeholder="Picture"><br>
        
        <input type="submit" value="Insert">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#myForm').submit(function(e) {
                // Stop the default behavior of the form
                e.preventDefault();

                $.ajax({
                        url: "{{ url('/properties/create') }}",
                        method: 'post',
                        data: $("form").serialize()
                    })
                    .done(function(result) {
                        console.log(result.success);
                        console.log(result.errors);
                    })
                    .fail(function(result) {
                        // Fail means : file not found, 500 errors.
                        // Fail doesnt mean : problem with php, syntax, db...
                        console.log('AJAX FAILED');
                    })

            });
        });
    </script>
@endsection
