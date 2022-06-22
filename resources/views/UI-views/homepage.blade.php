@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



<div class="search-section">

  <img class="main-logo" src="{{ asset('css/assets/logo-white-green.png') }}" alt="">
  <div class="wrapper">
    <h1>Set preferences. Get matches</h1>
  </div>

</div>


@foreach ($properties as $property)
<h2 class="prop-title">These are some of our properties: </h2>
<div class="display-properties">

  <div class="rent-properties-list" id="rent-properties-list">
    RENT

    <div><strong>Type : </strong>
      <p class="p-description"> {{ $property->type }}</p><br>
      <strong>Price : </strong>
      <p class="p-description"> {{ $property->price }}</p><br>
      <strong>Location : </strong>
      <p class="p-description"> {{$property->location}}</p><br>
      <strong>Date_avaliable: </strong>
      <p class="p-description"> {{ $property->date_avaliable}}</p><br>
    </div>


    
  </div>


  <div class="separator"></div>


  <div class="buy-properties-list" id="buy-properties-list">BUY

    <div><div><strong>Type : </strong>
      <p class="p-description"> {{ $property->type }}</p><br>
      <strong>Price : </strong>
      <p class="p-description"> {{ $property->price }}</p><br>
      <strong>Location : </strong>
      <p class="p-description"> {{$property->location}}</p><br>
      <strong>Date_avaliable: </strong>
      <p class="p-description"> {{ $property->date_avaliable}}</p><br>
    </div></div>
   

  </div>

</div>


<div class="centralize-register-btn">
  <button onclick="goToRegisterPage()" class="register-to-see-all" id="register-to-see-all">Register to see all of
    them!</button>
</div>

<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>
@endforeach
@endsection