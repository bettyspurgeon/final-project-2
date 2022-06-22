@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/contact-page.css">



@section('content')
<section class="contactform">
    <div class="main-content">
        <div class="container">
            <div class="screen_content">
                <div class="header">
                    <h1>Contact Us</h1>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');

                    @endphp

                </div>
                @endif
                <!-- <div class="content-form" > -->
                <form class="form" method="post" action="contact">
                    @csrf
                    <!-- <label>Name</label> -->
                    <input class="forminput" type="text" name="name" placeholder="Your name"><br>
                    <!-- <label>Email</label> -->
                    <input class="forminput" type="text" name="email" placeholder="Your email"><br>
                    <!-- <label>Phone Number</label> -->
                    <input class="forminput" type="text" name="phone-number" placeholder="Your phone number"><br>
                    <!-- <label>Subject</label> -->
                    <input class="forminput" type="text" name="subject" placeholder="Write your subject here"><br>
                    <!-- <label>Message</label> -->
                    <textarea class="forminput" id="textarea" name="message" placeholder="How can we help..."></textarea><br>
                    <input type="submit" class="forminput" id="btn" value="Send">
                </form>
                <!-- </div> -->
            </div>
            <div class="screen_background">
                <span class="screen_bg_shape screen_bg_shape4"></span>
                <span class="screen_bg_shape screen_bg_shape3"></span>
                <span class="screen_bg_shape screen_bg_shape2"></span>
                <span class="screen_bg_shape screen_bg_shape1"></span>
            </div>
        </div>
    </div>
</section>
@endsection