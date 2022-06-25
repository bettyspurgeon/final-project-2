@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@section('content')
    <section class="loginform">
        <div class="main-content">
            <div class="container">
                <div class="screen_content">
                    <div class="header">
                        <h1>Login</h1>

                    </div>
                    <div class="error-container">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <form class="login" action="" method="POST">
                        @csrf
                        <!-- <strong>Your email</strong> -->
                        <div class="login_field">
                            <i class="login_icon fa-solid fa-user"></i>
                            <input type="text" class="forminput" name="email" placeholder="Username / Email">
                        </div>
                        <div class="login_field">
                            <i class="login_icon fa-solid fa-lock"></i>
                            <input type="password" class="forminput" name="password" placeholder="Password">
                        </div>
                        <input type="submit" id="btn" value="Log-in">
                    </form>
                </div>
                <div class="screen_background">
                    <span class="screen_bg_shape screen_bg_shape4"></span>
                    <span class="screen_bg_shape screen_bg_shape3"></span>
                    <span class="screen_bg_shape screen_bg_shape2"></span>
                    <span class="screen_bg_shape screen_bg_shape1"></span>
                </div>

            </div>
        </div>


        </div>
    </section>

@endsection
