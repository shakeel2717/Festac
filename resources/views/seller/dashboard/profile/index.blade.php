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
                    <ul class="list-inline list-inline-m-1 mb-0">
                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2"
                                href="#">{{ auth()->user()->email }}</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <div class="card bg-primary">
                                <div class="card-body p-0">
                                    @if (auth()->user()->facebook != null)
                                        <a class="display-3 text-white" href="{{ auth()->user()->facebook }}"> <i
                                                class="tio-facebook-square"></i></a>
                                    @endif
                                    @if (auth()->user()->whatsapp != null)
                                        <a class="display-3 text-white" href="{{ auth()->user()->whatsapp }}"> <i
                                                class="tio-whatsapp"></i></a>
                                    @endif
                                    @if (auth()->user()->instagram != null)
                                        <a class="display-3 text-white" href="{{ auth()->user()->instagram }}"> <i
                                                class="tio-instagram"></i></a>
                                    @endif
                                    @if (auth()->user()->twitter != null)
                                        <a class="display-3 text-white" href="{{ auth()->user()->twitter }}"> <i
                                                class="tio-twitter"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                            <a class="font-size-sm text-body" href="#">{{ Str::ucfirst(auth()->user()->status) }}</a>
                        </div>
                        <div class="col-auto py-1">
                            <a href="{{ route('seller.profile.edit', ['profile' => Auth::user()->id]) }}"
                                class="btn btn-primary"><i class="tio-new-message"></i> Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
