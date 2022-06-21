@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
    <section class="about-us-content">

        <div class="container">
            <div class="text">
                <h1>We are a team of expert designers based in Luxembourg</h1>
                <h2>Mission</h2>
                <p> MatchHome is the site for real estate listings in Luxembourg. Since its creation, our mission has been
                    to offer the best platform for publishing and searching property listings.
                    We believe that real estate research should not be frustrating. If done with the right tools, it can be
                    a pleasant and rewarding experience. We work for this, join us!</p>
                <div class="values-container">
                    <h2>Values</h2>
                    <div class="values-cards">
                        <div class="value-card">
                            <i class="fa-solid fa-handshake fa-5x"></i>
                            <h3>Compatability</h3>
                            <p></p>
                        </div>
                        <div class="value-card">
                            <i class="fa-solid fa-handshake fa-5x"></i>
                            <h3>Time-Saving</h3>
                            <p></p>
                        </div>
                        <div class="value-card">
                            <i class="fa-solid fa-handshake fa-5x"></i>
                            <h3>Fairness</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <h1 style=" padding:10px; text-align: center;">Our Team</h1>
            <div class="row">
                <div class="column">
                    <div class="card">

                        <div class="container">
                            <h2></h2>
                            <p class="title">Developer</p>
                            <p>Some text that describes me </p>
                            <p>My email</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">

                        <div class="container">
                            <h2> </h2>
                            <p class="title">Developer</p>
                            <p>Some text that describes me </p>
                            <p>My email</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">

                        <div class="container">
                            <h2> </h2>
                            <p class="title">Developer</p>
                            <p>Some text that describes me </p>
                            <p>My email</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">

                        <div class="container">
                            <h2></h2>
                            <p class="title">Developer</p>
                            <p>Some text that describes me </p>
                            <p>My email</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>


                <div class="column">
                    <div class="card">

                        <div class="container">
                            <h2></h2>
                            <p class="title">Developer</p>
                            <p>Some text that describes me </p>
                            <p>My email</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
