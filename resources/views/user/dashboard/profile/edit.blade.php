@extends('user.layout.app')
@section('title')
    User Support Center
@endsection
@section('content')
    <h3 class="display-4">User Support Center</h3>
    <hr>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-lg border-primary">
                <div class="card-header mx-auto">
                    <div class="support-image">
                        <img src="{{ asset('assets/img/id-card.png') }}" alt="Support Center">
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title text-center">Update Profile</h2>
                        <a href="{{ route('user.profile.index') }}" class="btn btn-sm btn-primary">View Profile</a>
                    </div>
                    <hr>
                    <form action="{{ route('user.profile.update', ['profile' => Auth::user()->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <x-input name="name" type="text" value="{{ Auth::user()->name }}" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <x-input name="email" type="email" value="{{ Auth::user()->email }}" placeholder="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow-lg m-2 border-primary p-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGroupHoverLightFullName" class="input-label">Whatsapp
                                                    Account</label>

                                                <div class="input-group input-group-merge input-group-hover-light">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"
                                                            id="inputGroupHoverLightFullNameAddOn">
                                                            <i class="tio-whatsapp"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        id="inputGroupHoverLightFullName" name="whatsapp"
                                                        placeholder="Whatsapp with Country Code"
                                                        value="{{ Auth::user()->whatsapp ?? old('whatsapp') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGroupHoverLightFullName" class="input-label">Facebook
                                                    Link</label>

                                                <div class="input-group input-group-merge input-group-hover-light">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"
                                                            id="inputGroupHoverLightFullNameAddOn">
                                                            <i class="tio-facebook-square"></i>
                                                        </span>
                                                    </div>
                                                    <input type="url" class="form-control"
                                                        id="inputGroupHoverLightFullName" name="facebook"
                                                        placeholder="Your Facebook Profile Link"
                                                        value="{{ Auth::user()->facebook ?? old('facebook') }}"">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="  col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputGroupHoverLightFullName"
                                                            class="input-label">Instagram
                                                            Link</label>

                                                        <div class="input-group input-group-merge input-group-hover-light">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupHoverLightFullNameAddOn">
                                                                    <i class="tio-instagram"></i>
                                                                </span>
                                                            </div>
                                                            <input type="url" class="form-control" name="instagram"
                                                                id="inputGroupHoverLightFullName"
                                                                placeholder="Your Instagram Link"
                                                                value="{{ Auth::user()->instagram ?? old('instagram') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputGroupHoverLightFullName"
                                                            class="input-label">Twitter
                                                            Link</label>

                                                        <div class="input-group input-group-merge input-group-hover-light">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupHoverLightFullNameAddOn">
                                                                    <i class="tio-twitter"></i>
                                                                </span>
                                                            </div>
                                                            <input type="url" class="form-control" name="twitter"
                                                                id="inputGroupHoverLightFullName"
                                                                placeholder="Your Twitter Link"
                                                                value="{{ Auth::user()->twitter ?? old('twitter') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class=" row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-primary btn-lg">Update
                                                Profile
                                                Detail</button>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
