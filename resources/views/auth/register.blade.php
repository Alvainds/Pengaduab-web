@extends('layouts.app')

@section('content')

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
    style="background:url(src/assets/images/background/alesia-kazantceva-VWcPlbHglYc-unsplash.jpg) no-repeat top center;">
    <div class="auth-box on-sidebar p-4 bg-white m-0 ">
        <div>
            <div class="mb-3">
                <i class="bi bi-grid-fill fs-3 text-dark"></i>
            </div>
            <h3 class="box-title mt-5 mb-0">{{ __('Register') }} Now</h3><small>Create your account and enjoy</small>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal mt-3 form-material" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class=" form-group">
                            <div class="col-xs-12">
                                <input class="form-control @error('nik') is-invalid @enderror" type="text"
                                    placeholder="NIK" name="nik" value="{{ old('nik') }}" required autocomplete="nik"
                                    autofocus>

                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" form-group">
                            <div class="col-xs-12 mt-3">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    placeholder="Name" name="name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3 ">
                            <div class="col-xs-12">
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    type="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3 ">
                            <div class="col-xs-12">
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" name="password_confirmation" type="password" required
                                    autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class=" form-group mt-3">
                            <div class="col-xs-12 mt-3">
                                <input class="form-control @error('telp') is-invalid @enderror" type="number"
                                    placeholder="Telp" name="telp" value="{{ old('telp') }}" required
                                    autocomplete="telp" autofocus>

                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block fs-6 waves-effect waves-light"
                                    type="submit">{{
                                    __('Register') }}</button>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                <p>Already have an account? <a href="login2.html" class="text-info ml-1">Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
