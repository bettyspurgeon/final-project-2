@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/user-properties.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal-box.css') }}">
@section('title', 'Manage Properties')

@section('content')
    <section class="manage-properties-content">
        <h1 class="properties-header">Manage My Properties</h1>
        <div class="properties-container">
            @foreach ($properties as $property)
                <div class="property-card">
                    <div class="property-image"style='background-image: url({{ asset("uploads/$property->pictures") }})'>
                    </div>

                    <div class="property-description">
                        <p>Address: {{ $property->house_number }} {{ $property->street_name }}</p>
                        <p>Location: {{ $property->location }}
                        </p>
                        <p>Type: {{ ucfirst($property->type) }}</p>
                        <div class="property-links">
                            <a href="{{ route('properties.edit', [$property->id]) }}" class="property-link">Edit
                                Information</a>
                            <button id="modal-btn" class="modal-btn">Delete This Property</button>


                            <!-- The Modal -->
                            <div id="modal-box" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close-btn">&times;</span>
                                    <div class="modal-text">
                                        <h3>Are you sure you want to delete this property?</h3>
                                        <p>If you delete this property, all information associated with it will be lost.
                                            This includes any matches!</p>
                                        <a href="{{ route('properties.delete', [$property->id]) }}" class="">Delete
                                            This
                                            Property</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="add-property-prompt">
            <h3>You have {{ count($properties) > 0 ? count($properties) . ' Properties!' : '0 Properties!' }}
                Would you like to add another?</h3>
            <a class="change-prompt"href="/properties/create">
                Add New Property
            </a>
        </div>
    </section>
    <script src="{{ asset('js/modal-box.js') }}"></script>
@endsection
