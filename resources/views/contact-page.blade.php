@extends('templates/layoutTemplate')
<link rel="stylesheet" href="./css/contact-page.css">



@section('content')
<div class="main-content">
    <div class="container">
        <div class="header">
            <h2>Contact Form</h2>
        </div>
        <div class="content-form">
            <form method="Post">

                <label>Name</label>
                <input type="text" name="name" placeholder="Your name"><br>
                <label>Email</label>
                <input type="text" name="email" placeholder="Your email"><br>
                <label>Phone Number</label>
                <input type="text" name="phone-number" placeholder="Your phone number"><br>
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Write your subject here" placeholder="Write the subject"><br>
                <label>Message</label>
                <textarea name="message_body" placeholder="How can we help..."></textarea><br>
                <button type="submit" class="sendBtn">Send</button>
            </form>
        </div>
    </div>
</div>

@endsection