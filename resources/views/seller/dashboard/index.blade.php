@extends('seller.dashboard.layout.app')
@section('title')
    Seller Dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller Code: {{ Auth::user()->code }}</h3>
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
                            <h6 class="card-subtitle mb-2">All Request</h6>
                            <span class="display-3 text-dark">{{ $requests->where('status', 'open')->count() }}</span>
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
                            <span
                                class="display-3 text-dark">{{ $requests->where('status', 'complete')->where('seller_id', auth()->user()->id)->count() }}</span>
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
                            <span
                                class="display-3 text-dark">{{ $requests->where('status', 'pending')->where('seller_id', auth()->user()->id)->count() }}</span>
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
                    <a class="card bg-primary card-hover-shadow shadow-lg mb-4"
                        href="{{ route('seller.request.index') }}">
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
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <a class="card bg-primary card-hover-shadow shadow-lg mb-4"
                        href="{{ route('seller.support.index') }}">
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
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <a class="card bg-primary card-hover-shadow shadow-lg mb-4"
                        href="{{ route('seller.profile.index') }}">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <img class="avatar avatar-xl mr-4" src="{{ asset('assets/img/profile.png') }}"
                                    alt="Image Description">

                                <div class="media-body">
                                    <h3 class="text-hover-light text-white mb-1">My Account Settings</h3>
                                    <span class="text-white">Click to Update your Password and Profile Record</span>
                                </div>

                                <div class="ml-2 text-right">
                                    <i class="tio-chevron-right tio-lg text-white text-hover-primary"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h4 class="card-header-title">Latest transactions</h4>
                    <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle"
                            href="javascript:;" data-hs-unfold-options='{
                                                                       "target": "#reportsOverviewDropdown3",
                                                                       "type": "css-animation"
                                                                     }'>
                            <i class="tio-more-vertical"></i>
                        </a>

                        <div id="reportsOverviewDropdown3"
                            class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                            <span class="dropdown-header">More Detail</span>

                            <a class="dropdown-item" href="#">
                                <i class="tio-file dropdown-item-icon"></i> Complete Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-height">
                    <ul class="list-group list-group-flush list-group-no-gutters">
                        <li class="list-group-item">
                            <div class="media">
                                <img class="avatar avatar-sm avatar-circle mr-3"
                                    src="{{ asset('assets/img/finance.png') }}" alt="Image Description">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-7 col-md-5 order-md-1">
                                            <h5 class="mb-0 text-danger">Withdraw</h5>
                                            <span class="font-size-sm">Net Income</span>
                                        </div>

                                        <div class="col-5 col-md-4 order-md-3 text-right mt-2 mt-md-0">
                                            <h5 class="mb-0 text-danger">-$10.00 USD</h5>
                                            <span class="font-size-sm">{{ date('Y-m-d') }}</span>
                                        </div>

                                        <div class="col-auto col-md-3 order-md-2">
                                            <span class="badge badge-soft-warning badge-pill">Pending</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <img class="avatar avatar-sm avatar-circle mr-3"
                                    src="{{ asset('assets/img/finance.png') }}" alt="Image Description">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-7 col-md-5 order-md-1">
                                            <h5 class="mb-0 text-success">Order Revenue</h5>
                                            <span class="font-size-sm">Net Income</span>
                                        </div>

                                        <div class="col-5 col-md-4 order-md-3 text-right mt-2 mt-md-0">
                                            <h5 class="mb-0 text-success">-$10.00 USD</h5>
                                            <span class="font-size-sm">{{ date('Y-m-d') }}</span>
                                        </div>

                                        <div class="col-auto col-md-3 order-md-2">
                                            <span class="badge badge-soft-success badge-pill">Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
