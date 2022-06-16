@extends('templates/layoutTemplate')
    <link rel="stylesheet" href="./css/homepage.css">

@section('title', 'homepage')

@section('content')

    <div class="big-container">
      <h1>MatchHome</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    
      <div class="container-form">
        <div class="content-form">
          <form action="/dashboard" class="search-bar">
            <input type="text" placeholder="search..." name="q">
            <button type="submit"><img src="/css/assets/search.jpg" alt=""></button>
          </form>
        </div>   
      </div>
    </div>
  

 @endsection



