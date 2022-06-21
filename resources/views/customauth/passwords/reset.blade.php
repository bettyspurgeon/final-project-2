@extends('templates.layoutTemplate')
@section('content')

<div class="container">
     <div class="">
         <div class="">
            <div class="card">
                 <div class="card-header">Reset Password</div>
                      <div class="card-body">
                          <form method="POST" action="/reset-password">
                           @csrf
                           <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group ">
                            <label for="email" class="">E-Mail Address</label>
                          <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="">
                            <label for="password" class="">Password</label>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                      <div class="">
                            <label for="password-confirm" class="">Confirm Password</label>
                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                     <div class="">
                           <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection