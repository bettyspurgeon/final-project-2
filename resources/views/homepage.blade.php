@extends('templates/layoutTemplate')
    <link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



  <div class="search-section">

    <img class="main-logo" src="{{ asset('css/assets/logo-white-green.png') }}" alt="">
    
    <div class="content-form">
      <form action="/dashboard" class="search-bar">
        <input type="text" placeholder="search..." name="q">
        <button type="submit"><img src="./css/assets/finder-icon.png" alt=""></button>
      </form>
    </div>

  </div>

  <h2 class="prop-title">These are some of our properties. Register to see all of them!</h2>

  <div class="properties-section">
      
      <div class="avatar">
        <h2 class="price">€1890/mo </h2>
        <img src="{{ asset('css/assets/house-1.jpg') }}" alt="">
      </div>

      <div class="description">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum magnam sunt, facilis unde delectus officia atque rerum eos. Expedita eius minima natus aut facere perspiciatis suscipit. Aliquid fuga tempore voluptatibus!</p>
      </div>

      <div class="map">

  </div>

  

 @endsection



