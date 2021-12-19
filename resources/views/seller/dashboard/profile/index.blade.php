@extends('seller.dashboard.layout.app')
@section('title')
    Seller Profile
@endsection
@section('content')
    <h3 class="display-4">Seller Profile</h3>
    <hr>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body mb-3 mb-lg-5 shadow-lg">
                <h5>{{ profilePercentage() > 89 ? 'Your Profile Complete' : 'Complete your profile' }}</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="progress flex-grow-1">
                        <div class="progress-bar {{ profilePercentage() > 89 ? 'bg-success' : 'bg-primary' }} "
                            role="progressbar" style="width: {{ profilePercentage() }}%"
                            aria-valuenow="{{ profilePercentage() }}" aria-valuemin="0"
                            aria-valuemax="{{ profilePercentage() }}"></div>
                    </div>
                    <span class="ml-4">{{ profilePercentage() }}%</span>
                </div>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <div class="card h-100 shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl avatar-circle avatar-border-lg avatar-centered mb-3">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}"
                            alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                    <h3 class="mb-1"><a class="text-dark" href="#">{{ auth()->user()->name }}</a></h3>
                    <div class="mb-3">
                        <i class="tio-poi-user mr-1"></i>
                        <span>{{ auth()->user()->code }}</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                            <a class="font-size-sm text-body" href="#">{{ Str::ucfirst(auth()->user()->status) }}</a>
                        </div>
                        <div class="col-auto py-1">
                            <a href="{{ route('seller.profile.edit', ['profile' => Auth::user()->id]) }}" class="btn btn-primary"><i class="tio-new-message"></i> Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
