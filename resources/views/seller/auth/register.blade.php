@extends('seller.auth.layout.app')
@section('left')
    <div style="max-width: 23rem;">
        <div class="text-center mb-5">
            <img class="img-fluid" src="{{ asset('assets/img/seller-cover.png') }}" alt="Image Description"
                style="width: 20rem;">
        </div>
        <div class="mb-5">
            <h2 class="display-4">Sell any products with:</h2>
        </div>
        <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
            <li class="list-checked-item">
                <span class="d-block font-weight-bold mb-1">All-in-one tool</span>
                Build, run, and scale your business - end to end
            </li>
            <li class="list-checked-item">
                <span class="d-block font-weight-bold mb-1">Easily add &amp; manage your services</span>
                It brings together your tasks, projects, timelines, files and more
            </li>
            <li class="list-checked-item">
                <span class="d-block font-weight-bold mb-1">24/7 Support</span>
                Contact with Support, 24/7
            </li>
        </ul>
    </div>
@endsection
@section('form')
    <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
        <form class="js-validate" action="{{ route('seller.store') }}" method="POST">
            @csrf
            <div class="text-center">
                <div class="mb-5">
                    <h1 class="display-4">Create free Account</h1>
                    <p>Are you a Customer? <a href="{{ route('login') }}">Sign In
                            here</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <x-input name="business" type="text" placeholder="Business Name" value="{{ old('business') }}" />
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="category">Choose your Business Category</label>
                        <!-- Select2 -->
                        <select name="category" class="js-select2-custom custom-select"> size="1" style="opacity: 0;"
                            <option value="1">Sports</option>
                            <option value="1">Games</option>
                            <option value="1">Shoes</option>
                            <option value="1">Clothes</option>
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="col-md-12">
                    <x-input name="address" type="text" placeholder="Business Address" value="{{ old('address') }}" />
                </div>
                <div class="col-md-6">
                    <x-input name="name" type="text" placeholder="Full Name." value="{{ old('name') }}" />
                </div>
                <div class="col-md-6">
                    <x-input name="whatsapp" type="text" placeholder="Whatsapp." value="{{ old('whatsapp') }}" />
                </div>
                <div class="col-md-12">
                    <x-input name="email" type="email" placeholder="Type Email." value="{{ old('email') }}" />
                </div>
            </div>
            <x-input name="password" type="password" placeholder="Type Password." />

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="remember" required>
                    <label class="custom-control-label text-muted" for="termsCheckbox"> I agree to Terms and
                        Conditions</label>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary">Create Account</button>
        </form>
    </div>
@endsection
