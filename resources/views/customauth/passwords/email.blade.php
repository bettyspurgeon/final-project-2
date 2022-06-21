@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/email.css') }}">
@section('content')
<div class="container" style="height: 80vh">
     <div class="">
        <div class="">
            <div class="card">
              
                
               <div class="card-body">
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                   <form method="POST" action="/forget-password">
                        @csrf
                          <div class="password-reset-form">
                            <h1>Reset Password</h1>
                         
                            <label for="email" class="">E-Mail Address</label>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                <button type="submit" class="submit-btn">
                                    Send Password Reset Link
                                </button>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="">
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection