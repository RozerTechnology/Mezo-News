@extends('layouts.app')

@section('content')
<div class="main-container" id="container">
    <div class="form-container log-in-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>{{ __('Register') }}</h1>
            <div class="text-center">
            <span>Create an Account now and enjoy Our Services</span>
            </div>
            <!-- --------  Username  ---------->
            <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- --------  Email  ---------->
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- --------  Password  ---------->
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- --------  Confirm Password  ---------->
            <input id="password-confirm" type="password" placeholder="Confirm-Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            
            <!-- --------  Register Button  ---------->
            <button type="submit" class="btn btn-primary buttonSubmite">
                {{ __('Register') }}
            </button>

        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Wellcome</h1>
                <p>With MezoNews , here you can find the latest world news.</p>
                <div class="social-container text-center mb-3">
                    <!-- --------  Login Link  ---------->
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Already have an Account?') }}
                    </a>
                    <p>- OR -</p>
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x material-icons"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x material-icons"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
