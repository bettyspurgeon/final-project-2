@extends('templates.layoutTemplate')
<link rel="stylesheet" href="./css/contact-page.css">



@section('content')
    <div class="main-content">
        <div class="container">
            <div class="header">
                <h1>Contact Form</h1>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php 
                        Session::forget('success');

                    @endphp

                </div>
            @endif
            <div class="content-form" >
                <form method="post" action="contact">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Your name"><br>
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Your email"><br>
                    <label>Phone Number</label>
                    <input type="text" name="phone-number" placeholder="Your phone number"><br>
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Write your subject here"
                        placeholder="Write the subject"><br>
                    <label>Message</label>
                    <textarea name="message" placeholder="How can we help..."></textarea><br>
                    <input type="submit" class="sendBtn" value="Send">
                </form>
            </div>
        </div>
    </div>
@endsection
