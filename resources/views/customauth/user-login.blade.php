@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
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

        <div class="main-content">
            <div class="container">
                <div class="header">
                    <h1>Login Form</h1>
                </div>
                <form action="" method="POST">
                    @csrf
                   <strong>Your email</strong>
                    <input class="forminput"type="text" name="email" placeholder="Email"><br>
                    <strong>Your password</strong>
                    <input class="forminput"type="password" name="password" placeholder="Password"><br>
                    <input class="forminput"type="submit" id="btn" value="Login">
                </form>

            </div>
        </div>


    </div>
    
@endsection