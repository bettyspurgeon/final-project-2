@extends('templates/layoutTemplate')
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
                    <h2>Login Form</h2>
                </div>
                <form action="" method="POST">
                    @csrf
                    <label>Your email</label>
                    <input class="forminput"type="form" name="email" placeholder="Email"><br>
                    <label>Your password</label>
                    <input class="forminput"type="form" name="password" placeholder="Password"><br>
                    <input class="forminput"type="form" id="btn" value="Login">
                </form>

            </div>
        </div>


    </div>
    
@endsection