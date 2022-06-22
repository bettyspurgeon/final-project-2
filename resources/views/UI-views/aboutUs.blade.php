@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@section('content')
<section class="about-us-content">

    <div class="page-container">
        <div class="who-we-are">
            <h2>Who are we?</h2>
            <p> MatchHome is the site for real estate listings in Luxembourg. Since its creation, our mission has been
                to offer the best platform for publishing and searching property listings.
                We believe that real estate research should not be frustrating. If done with the right tools, it can be
                a pleasant and rewarding experience. We work for this, join us!</p>
            <div class="values-container">
                <h2 class="values-title">Our values</h2>
                <div class="our-values">
                    <div class="value-card">
                        <i class="fa-solid fa-handshake fa-5x"></i>
                        <h3 class="value-title">Compatability</h3>
                    </div>
                    <div class="value-card">
                        <i class="fa-solid fa-handshake fa-5x"></i>
                        <h3 class="value-title">Time-Saving</h3>
                    </div>
                    <div class="value-card">
                        <i class="fa-solid fa-handshake fa-5x"></i>
                        <h3 class="value-title">Fairness</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <h1 class="our-team">Our Team</h1>
        <div class="people-cards">

            <div class="card-inner-container">
                <p class="person-title">Developer</p>
                <p>Some text that describes me </p>
                <p class="person-email">person@matchhome.lu</p>
                <button class="contact-btn">Contact</button>
            </div>

            <div class="card-inner-container">
                <p class="person-title">Developer</p>
                <p class="person-desc">Some text that describes me </p>
                <p class="person-email">person@matchhome.lu</p>
                <button class="contact-btn">Contact</button>
            </div>

            <div class="card-inner-container">
                <p class="person-title">Developer</p>
                <p class="person-desc">Some text that describes me </p>
                <p class="person-email">person@matchhome.lu</p>
                <button class="contact-btn">Contact</button>
            </div>

            <div class="card-inner-container">
                <p class="person-title">Developer</p>
                <p class="person-desc">Some text that describes me </p>
                <p class="person-email">person@matchhome.lu</p>
                <button class="contact-btn">Contact</button>
            </div>

            <div class="card-inner-container">
                <h2></h2>
                <p class="person-title">Developer</p>
                <p class="person-desc">Some text that describes me </p>
                <p class="person-email">person@matchhome.lu</p>
                <button class="contact-btn">Contact</button>
            </div>
        </div>

</section>
@endsection