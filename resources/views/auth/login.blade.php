@extends('layouts.app')
<style>
    .card {
        width: 450px; /* Set the maximum width of the card */
        margin: auto; /* Center the card horizontally */
        margin-top: 50px; /* Adjust top margin as needed */
    }
</style>
@section('content')
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="border-radius: 10px;" class="card">
                <div style="font-size: 25px; text-align: center;color: #EEE3CB;background-color: #9BABB8;" class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6 mx-auto">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"  required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mx-auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a style="color: #967E76; font-size:14px" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button style="width: 100%; background-color: #9BABB8; color:#EEE3CB" type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                                <div style="display: flex; justify-content: space-between; align-items: center;margin-top: 10px;">
                                    <p>Dont have an account?

                                        <a href="/register">Sign up</a>
                                    </p>
                                </div>

                                {{-- @if (Route::has('password.request'))
                                    <a style="color: #967E76; font-size:12px" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
