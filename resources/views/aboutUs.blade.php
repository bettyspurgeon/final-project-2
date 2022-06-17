@extends('templates/layoutTemplate')
<link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
@section('content')

 <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div> 
        <div class="main-container">
    <div class="container">
        <div class="text">
  <h1>We are a team of expert designers based in Luxembourg</h1>
  <h2>Mission </h2>
    <p> MatchHome is the site for real estate listings in Luxembourg and its border areas. Since its creation in 2008, our mission has been to offer the best platform for publishing and searching property listings.
    We believe that real estate research should not be frustrating. If done with the right tools, it can be a pleasant and rewarding experience. We work for this, join us!</p>

    <h2>Values</h2>
   <p> Values
some icon
We bring innovation to the real estate market, with dedication and enthusiasm. Our mission is to offer the best real estate search service: easily usable by everyone, both on desktops and smartphone, supporting real estate agents in the brokerage activity.

some icon
We are driven by innovation: we are convinced that what has been done so far in the real estate sector is only an anticipation of big changes in the coming years. New software, more and more hardware powerful, mobile devices and artificial intelligence glimpse high potential, unthinkable even just a few years ago.

some icon
We aim to thetechnological excellence: we invest a large part of our economic and human resources to ensure that technology makes simple complex activities and that our users can take full advantage of our services. Often complex and more powerful things are those that are not seen.

some icon
We believe in the service and respect for the users who are looking for properties and professionals who use our portals to publish their offers. If we have achieved such relevant results in such a short time it's been thanks to the support, suggestions and criticisms of those who use the sites of our network.</p>  </div>
    
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
</div>
</div>

@endsection