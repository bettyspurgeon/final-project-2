@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal-box.css') }}">

@section('title', 'Manage Account')

@section('content')

    <section class="contactform">
        <div class="main-content">
            <div class="container">
                <div class="screen_content">
                    <div class="header">
                        <h1>Manage Account</h1>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-success" style="color: red">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div>
                        <form class="form"action="" method="POST">
                            @csrf
                            <input class="forminput"type="text" name="first_name" value="{{ $user->first_name }}"><br>
                            <input class="forminput"type="text" name="last_name" value="{{ $user->last_name }}"><br>
                            <input class="forminput"type="email" name="email" value="{{ $user->email }}">
                            <input class="forminput"type="text" name="username" value="{{ $user->username }}"><br>

                            <select class="forminput" name="type" id="">
                                <option selected value={{ $user->type }}> {{ $user->type }} </option>
                                <option value="seller">Seller</option>
                                <option value="buyer">Buyer</option>
                                <option value="renter">Renter</option>
                                <option value="landlord">Landlord</option>
                            </select><br>
                            <p class="change-pass-field"><a class="change-pass"href="/forget-password">Change Password</a>
                            </p><input type="submit" id="btn" value="Update Information">
                        </form>

                    </div>
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

    <div class="second-menu">
        <button id="modal-btn" class="modal-btn">Delete My Account!</button>
        <!-- The Modal -->
        <div id="modal-box" class="modal">

            <!-- Modal content -->
            <div class="modal-content delete-account">
                <span class="close-btn">&times;</span>
                <div class="modal-text">
                    <h3>Hey - Just Checking in to make sure you really want to delete your account!</h3>
                    <p>If you continue this action, all your account data will be lost! This includes information and any
                        matches you have!</p>
                    <div class="delete-act-btns">
                        <a href="{{ "/deleteaccount/$user->id" }}"><button>Yes! Delete My Account</button></a>
                    </div>
                </div>
            </div>

        </div>
        @if ($user->type == 'renter')
            <div class="manage-btn-container">

                <a href="/preferences/{{ $user->id }}">
                    <button class="manage-btn">Click to Manage Preferences</button>
                </a>
                <a href="/user-profile/{{ $user->id }}">
                    <button class="manage-btn">Click to Manage My Documents and Information</button>
                </a>

            </div>
        @endif
    </div>
    <script src="{{ asset('js/modal-box.js') }}"></script>
@endsection
