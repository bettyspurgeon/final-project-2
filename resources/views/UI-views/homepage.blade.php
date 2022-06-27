@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



    <div class="search-section">

        <img class="main-logo" src="{{ asset('css/assets/logo-match-home-without-get.png') }}" alt="">
        <img class="main-logo-2" src="{{ asset('css/assets/logo-white-green.png') }}" alt="">
        <div class="wrapper">
            <h1>Set preferences. Get matches.</h1>
        </div>

    </div>

    <h2 class="prop-title">These are some of our properties: </h2>
    <section class="properties-display">

        <div class="rent-properties-list">
            <h2>RENT</h2>

            <div class="rent-props">
                <div>
                    <img class="prop-img" src="{{ asset('css/assets/apartment-1.jpg') }}" alt="">
                </div>
                <div class="prop-desc">
                    <h3>Hollerich</h3>
                </div>
            </div>

            <div class="separator-mobile"></div>

            <div class="rent-props">
                <div>
                    <img class="prop-img" src="{{ asset('css/assets/apartment-3.jpg') }}" alt="">
                </div>
                <div class="prop-desc">
                    <h3>Eich</h3>
                </div>
            </div>

        </div>

        <div class="separator"></div>

        <div class="buy-properties-list">
            <h2>BUY</h2>
            <div class="buy-props">
                <div>
                    <img class = "prop-img" src="{{ asset('css/assets/house-1.jpg') }}" alt="">
                </div>

                <div class="prop-desc">
                    <h3>Strassen</h3>
                </div>
            </div>

            <div class="separator-mobile"></div>

            <div class = "buy-props">
                <div>
                    <img class = "prop-img" src="{{ asset('uploads/house1.jpeg') }}" alt="">
                </div>

                <div class="prop-desc">
                    <h3>Limpertsberg</h3>
                </div>
            </div>

        </div>

    </section>


    <div class="centralize-register-btn">
        <button type="button" onclick="location.href='/properties'"  class="register-to-see-all" id="register-to-see-all">
            Register to see all of them!
        </button>
    </div>
    <script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

@endsection
