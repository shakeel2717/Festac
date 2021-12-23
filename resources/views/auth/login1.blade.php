@extends('auth.layout.app1')
@section('title')
    Login Page
@endsection
@section('form')
    <form class="js-validate" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="">
            <div class="content">
                <div class="mb-5">
                    <div class="d-flex justify-content-between">
                        <div class="left">
                        </div>
                        <div class="right">
                            <a class="btn btn-lg btn-white mb-4" href="{{ route('seller.register') }}">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xs mr-2" src="{{ asset('assets/img/seller.png') }}"
                                        alt="Image Description">
                                    Become Seller at {{ env('APP_NAME') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="js-form-message form-group">
                        <label class="input-label text-white" for="email">Enter Email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="email"
                            placeholder="Enter Email" value="{{ old('email') }}"
                            style="opacity: 0.5; background-color: #514B96">
                        <div class=" js-form-message form-group">
                            <label class="input-label text-white" for="password">Enter Password</label>
                            <input type="password" class="form-control form-control-lg" name="password" id="password"
                                placeholder="Enter Password" value="{{ old('password') }}"
                                style="opacity: 0.5; background-color: #514B96">
                        </div>

                        <div class=" form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="remember">
                                <label class="custom-control-label text-muted" for="termsCheckbox"> Remember
                                    me</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-white">Sign in</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-lg btn-block btn-white mb-4" href="{{ route('login.google') }}">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <img class="avatar avatar-xs mr-2"
                                            src="{{ asset('assets/svg/brands/google.svg') }}" alt="Image Description">
                                        Via Google
                                    </span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-lg btn-block btn-white mb-4" href="{{ route('login.facebook') }}">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <img class="avatar avatar-xs mr-2"
                                            src="{{ asset('assets/svg/brands/facebook.svg') }}" alt="Image Description">
                                        Via Facebook
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h1 class="display-4 text-white text-center">Login to your account</h1>
                        <p class="text-white text-center">Don't have an account yet? <a class="text-white"
                                href="{{ route('register') }}">Sign up
                                here</a></p>
                        <p class="text-white text-center">Forgot Password? <a class="text-white"
                                href="{{ route('password.request') }}">Click to Reset</a></p>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
