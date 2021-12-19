@extends('seller.dashboard.layout.app')
@section('title')
    Seller Dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller State</h3>
    <hr>
    <x-seller-warning />
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/analytics.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Today's Request</h6>
                            <span class="display-3 text-dark">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/visualization.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Complete Orders</h6>
                            <span class="display-3 text-dark">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/processing.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Pending Orders</h6>
                            <span class="display-3 text-dark">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-lg-12">
                    <a class="card bg-primary card-hover-shadow shadow-lg mb-4" href="#">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <img class="avatar avatar-xl mr-4" src="{{ asset('assets/img/searching.png') }}"
                                    alt="Image Description">

                                <div class="media-body">
                                    <h3 class="text-hover-light text-white mb-1">View Users Request</h3>
                                    <span class="text-white">Click to view all Users Request</span>
                                </div>

                                <div class="ml-2 text-right">
                                    <i class="tio-chevron-right tio-lg text-white text-hover-primary"></i>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <a class="card bg-primary card-hover-shadow shadow-lg mb-4" href="#">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <img class="avatar avatar-xl mr-4" src="{{ asset('assets/img/support.png') }}"
                                    alt="Image Description">

                                <div class="media-body">
                                    <h3 class="text-hover-light text-white mb-1">Contact Support</h3>
                                    <span class="text-white">Click to go to Revolation Center</span>
                                </div>

                                <div class="ml-2 text-right">
                                    <i class="tio-chevron-right tio-lg text-white text-hover-primary"></i>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
