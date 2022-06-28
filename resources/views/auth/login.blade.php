@extends('layouts.app')

@section('content')

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
    style="background:url(src/assets/images/background/alesia-kazantceva-VWcPlbHglYc-unsplash.jpg) no-repeat top center;">
    <div class="p-5 bg-white rounded">
        <div id="loginform">
            <div class="row justify-content-center ">
                <div class="col-md-12 mx-5">
                    <div class="mb-3">
                        <i class="bi bi-grid-fill fs-3 text-dark"></i>
                    </div>
                    <h3>Hello! let's get started</h3>
                    <p>Sign in to continue.</p>
                    <form method="POST" class="form-horizontal mt-2 form-material" id="loginform"
                        action="{{ route('login') }}">

                        @csrf

                        <div class="form-group mb-3">
                            <input class="form-control p-4 @error('email') is-invalid @enderror" name="email" id="email"
                                type="email" required autocomplete="email" placeholder="Username"
                                value="{{ old('email') }}" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <input id="password" class="form-control p-4 @error('password') is-invalid @enderror"
                                name="password" type="password" required autocomplete="current-password"
                                placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-3 d-flex">

                            <div class="checkbox checkbox-info float-left pt-0 ml-2 mb-3">
                                <input id="checkbox-signup" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>
                                <label class="fs-6" for="checkbox-signup"> {{ __('Remember Me') }} </label>

                            </div>


                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" id="to-recover"
                                class="text-dark ml-auto mb-3 fs-6">{{ __('Forgot Your
                                Password?') }}</a>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-info btn-lg btn-block fs-6 waves-effect waves-light" type="submit">{{
                                __('Login') }}</button>
                        </div>

                        <div class="form-group mb-0">
                            <div class="text-center fs-6">
                                <p>Don't have an account? <a href="authentication-register1.html"
                                        class="text-info  font-weight-normal">Create</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="recoverform">
            <div class="logo">
                <h3 class="font-weight-medium mb-3">Recover Password</h3>
                <span>Enter your Email and instructions will be sent to you!</span>
            </div>
            <div class="row mt-3">
                <form class="col-12 form-material" action="index.html">
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="email" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button class="btn btn-block btn-lg btn-primary text-uppercase" type="submit"
                                name="action">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
