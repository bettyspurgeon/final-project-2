@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



    <div class="search-section">

        <img class="main-logo" src="{{ asset('css/assets/logo-white-green.png') }}" alt="">

        {{-- <div class="content-form">
      <form action="/dashboard" class="search-bar">
        <input type="text" placeholder="search..." name="q">
        <button type="submit"><img src="./css/assets/finder-icon.png" alt=""></button>
      </form>
    </div> --}}


        <div class="rent-buy-btns-container" >
            <button class="rent-btn" onclick="displayRentProps()">I want to rent!</button>
            <button class="buy-btn" onclick="displayBuyProps()">I want to buy!</button>
        </div>
    </div>




    <div class="rent-properties-list" id="rent-properties-list">
        <h2 class="prop-title">These are some of our properties: </h2>
        <div class="rent-props" id="rent-properties">
          Property to rent #1
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #2
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #3
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #4
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #5
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #6
        </div>
        <div class="rent-props" id="rent-properties">
          Property to rent #7
        </div>
    </div>



    
    <div class="buy-properties-list" id="buy-properties-list">
        <h2 class="prop-title">These are some of our properties: </h2>
        <div class="buy-props" id="buy-properties">
          Property to buy #1
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #2
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #3
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #4
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #5
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #6
        </div>
        <div class="buy-props" id="buy-properties">
          Property to buy #7
        </div>
    </div>
    <div class="centralize-register-btn">
        <button onclick="goToRegisterPage()" class="register-to-see-all" id="register-to-see-all">Register to see all of them!</button>
    </div>

    <script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

@endsection

