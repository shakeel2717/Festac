@extends('seller.dashboard.layout.app')
@section('title')
    Seller Profile
@endsection
@section('content')
    <h3 class="display-4">Seller State</h3>
    <hr>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">Profile overview</h2>
                    <hr>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('seller.profile.edit', ['profile' => Auth::user()->id]) }}"
                                    class="btn btn-primary btn-lg"> <i class="tio-settings"></i> Edit Profile</a>
                            </div>
                            <div class="col-md-12">
                                <label for="name">Full Name</label>
                                <x-input name="name" type="text" value="{{ Auth::user()->name }}" placeholder="" />
                            </div>
                            <div class="col-md-12">
                                <label for="name">User Code</label>
                                <x-input name="name" type="text" value="{{ Auth::user()->code }}" placeholder="" />
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <x-input name="email" type="email" value="{{ Auth::user()->email }}" placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="whatsapp">Whatsapp</label>
                                <x-input name="whatsapp" type="text" value="{{ Auth::user()->whatsapp }}"
                                    placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="facebook">Facebook</label>
                                <x-input name="facebook" type="text" value="{{ Auth::user()->facebook }}"
                                    placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="instagram">Instagram</label>
                                <x-input name="instagram" type="text" value="{{ Auth::user()->instagram }}"
                                    placeholder="" />
                            </div>
                            <div class="col-md-6">
                                <label for="twitter">Twitter</label>
                                <x-input name="twitter" type="text" value="{{ Auth::user()->twitter }}" placeholder="" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
