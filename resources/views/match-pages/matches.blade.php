@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/user-properties.css') }}">

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
    <section class="manage-properties-content">
        <h1 class="properties-header">Here are you matches!</h1>
        <div class="properties-container">
            @foreach ($complete_matches as $match)
                <div class="property-card">
                    <div class="property-image" style="background-image: url('uploads/{{ $match->pictures }}')">
                    </div>
                    <div class="property-description">
                        <p>Type: {{ ucfirst($match->type) }}</p>
                        <p> Price:
                            {{ $match->purpose == 'For rent' ? $match->price . '€/Per Month' : $match->price . '€' }}</p>

                        <p>Location: {{ $match->location }}</p>

                        <p> Date Avaliable: {{ $match->date_avaliable }}</p>
                        <div class="property-links">
                            <a class="property-link" href="{{ "/properties/$match->id" }}">Details</a>
                            <a class="property-link"
                                href="{{ '/interested-' . $match->user_id . '-' . $user->user_id }}">I'm Interested!</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h3>You have
            {{ count($complete_matches) >= 1 ? count($complete_matches) . ' Matches!' : ' 0 Matches - but you can try some new preferences.' }}
        </h3>
    </section>
@endsection
