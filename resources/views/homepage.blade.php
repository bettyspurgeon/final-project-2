@extends('templates/layoutTemplate')
    <link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')



  <div class="main-content">
    <img class="main-logo" src="{{ asset('css/assets/logo.png') }}" alt="">
    
    <div class="content-form">
      <form action="/dashboard" class="search-bar">
        <input type="text" placeholder="search..." name="q">
        <button type="submit"><img src="./css/assets/finder-icon.png" alt=""></button>
      </form>
    </div>

  </div>
  

 @endsection



