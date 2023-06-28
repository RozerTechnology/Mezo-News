@extends('layouts.app')

@section('content')
<div class="main-container" id="container">
    <div class="form-container log-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>{{ __('Login') }}</h1>
            <span class="text-center mb-3">Log In now to enjoy Our Services</span>
            <!-- --------  Email  ---------->
            <input id="email"  type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- --------  Password  ---------->
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- --------  Remember Me  ---------->
            <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
              </div>
            <!-- --------  Login Button  ---------->
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
            <!-- --------  Forgot Password  ---------->
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Wellcome</h1>
                <p>With MezoNews , here you can find the latest world news.</p>
                <div class="social-container text-center mb-3">
                    <span class="inf"> Now You can Create an Account</span> <a href="{{ route('register') }}">here</a>
                    <p>- OR -</p>
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x material-icons"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x material-icons"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
