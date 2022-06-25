@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



    <div class="search-section">

        <img class="main-logo" src="{{ asset('css/assets/logo-white-green.png') }}" alt="">
        <div class="rent-buy-btns-container">
            <button type="button" class="rent-btn" onclick="location.href='/hrproperties'">I want to rent!</button>
            <button type="button" class="buy-btn" onclick="location.href='/hsproperties'">I want to buy!</button>
        </div>
        <div class="wrapper">

            <h1>Set preferences. Get matches</h1>
        </div>

    </div>

    <section class="properties-display">
        <h2 class="prop-title">These are some of our properties: </h2>
        <div class="display-properties">
            <h4>Properties for Rent</h4>
            <div class="rent-properties-list" id="rent-properties-list">
                <div class="rent-props" id="rent-properties">
                    <div >
                        <img src="{{ asset('uploads/apartment4.jpeg') }}" alt="" style="width: 100px;">
                    </div>
                    <div style="display:flex; flex-direction:column;">
                        Type : Apartment <br>
                        Price : 1800 <br>
                        Location : Hollerich <br>
                        Date_avaliable: 2022-06-22 <br>
                    </div>
                </div>
                <hr><br>
                <div class="rent-props" id="rent-properties">
                    <div>
                        <img src="{{ asset('uploads/apartment3.jpeg') }}" alt="" style="width: 100px;">
                    </div>
                    <div style="display:flex; flex-direction:column;">
                        Type : house <br>
                        Price : 1580 <br>
                        Location : Gare <br>
                        Date_avaliable: 2022-06-22 <br>
                    </div>
                </div>
             
                <div class="rental-properties-container" id="rent-properties">
                    <div>
                        <img src="{{ asset('uploads/house4.jpeg') }}" alt="" >
                    </div>
          
                </div>
                <a href="/hrproperties">See More Properties For Rent</a>
            </div>
            <h4>Properties for Sale</h4>
            <div class="buy-properties-list" id="buy-properties-list">

                <div class="buy-properties-list" id="buy-properties-list">
                    <H4>BUY</H4>
                    <hr><br>
                    <div class="buy-props" id="buy-properties">
                        <div>
                            <img src="{{ asset('uploads/xxl.jpeg') }}" alt="" style="width: 100px;">
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            Type : Apartment <br>
                            Price : 520000 <br>
                            Location : Hollerich <br>
                            Date_avaliable: 2022-06-22 <br>
                        </div>
                    </div>
                    <hr><br>
                    <div class="buy-props" id="buy-properties">
                        <div>
                            <img src="{{ asset('uploads/nice-apartment.jpeg') }}" alt="" style="width: 100px;">
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            Type : House <br>
                            Price : 550000 <br>
                            Location : Gare <br>
                            Date_avaliable: 2022-06-22 <br>
                        </div>
                    </div>
                    <hr><br>
                    <div class="buy-props" id="buy-properties">
                        <div>
                            <img src="{{ asset('/uploads/house1.jpeg') }}" alt="" style="width: 100px;">
                        </div>
                        <div style="display:flex; flex-direction:column;">
                            Type : House <br>
                            Price : 550000 <br>
                            Location : Gaspericn <br>
                            Date_avaliable: 2022-06-22 <br>
                        </div>
                    </div>
                    <a href="/hrproperties">See More Properties For sale</a>
                </div>

            </div>



            <div class="centralize-register-btn">
                <button onclick="goToRegisterPage()" class="register-to-see-all" id="register-to-see-all">
                    Register to see all of them!
                </button>
            </div>
    </section>
    <script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

@endsection
