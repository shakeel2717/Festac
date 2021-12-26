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
                            <a class="btn btn-lg btn-white" href="{{ route('seller.register') }}">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xs mr-2" src="{{ asset('assets/img/seller.png') }}"
                                        alt="Image Description">
                                    Become Seller at {{ env('APP_NAME') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="d-flex align-items-center" style="height: 550px;">
                        <div class="flex w-100">
                            <div class="js-form-message form-group mt-5">
                                <label class="input-label text-white" for="email">Enter Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email"
                                    value="{{ old('email') }}" style="opacity: 0.5; background-color: #514B96">
                                <div class=" js-form-message form-group">
                                    <label class="input-label text-white" for="password">Enter Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter Password" value="{{ old('password') }}"
                                        style="opacity: 0.5; background-color: #514B96">
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                                            name="remember">
                                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember
                                            me</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6 col-md-4 mx-auto">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-md btn-block"
                                            style="background-color:#313463; color:white;">Login</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a class="btn btn-icon btn-white p-4 rounded-circle m-2"
                                                href="{{ route('login.google') }}">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <img class="avatar avatar-xs mr-2"
                                                        src="{{ asset('assets/svg/brands/google.svg') }}"
                                                        alt="Image Description">
                                                </span>
                                            </a>
                                            <a class="btn btn-icon btn-white p-4 rounded-circle m-2"
                                                href="{{ route('login.facebook') }}">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <img class="avatar avatar-xs mr-2"
                                                        src="{{ asset('assets/svg/brands/facebook.svg') }}"
                                                        alt="Image Description">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="text-white text-center mb-0">
                                        <a style="color: #313463; font-size: 25px;" href="{{ route('register') }}">Sign up</a>
                                    </p>
                                    <p class="text-white text-center"><a style="color: #313463"
                                            href="{{ route('password.request') }}">Click to Reset</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </form>
@endsection
