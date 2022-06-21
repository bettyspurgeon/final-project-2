<div class="container">
    <div class="card">
        <div class="card-header">Verify Your Email Address</div>
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <a href="http://127.0.0.1:8000/reset-password/{{ $token }}">Click Here</a>.
        </div>
    </div>
</div>
