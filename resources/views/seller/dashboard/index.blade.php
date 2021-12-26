@extends('seller.dashboard.layout.app')
@section('title')
    Seller Dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller Code: {{ Auth::user()->code }}</h3>
    <hr>
    <x-seller-warning />
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/sale.png') }}" alt="Earnings" width="50">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Available Balance</h6>
                            <span class="display-3 text-dark">{{ number_format(balance(), 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/invoice.png') }}" alt="Earnings" width="50">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Pending Clearance</h6>
                            <span class="display-3 text-dark">{{ number_format(clearance(), 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <!-- Card -->
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/cashier.png') }}" alt="Earnings" width="50">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Total Withdraw</h6>
                            <span class="display-3 text-dark">{{ number_format(withdraw(), 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
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
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
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
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
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
                                class="display-3 text-dark">{{ $requests->where('status', 'accepted')->where('seller_id', auth()->user()->id)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @forelse ($orders as $order)
        <div class="row">
            <div class="col mb-3">
                <div class="card card-body">
                    <div class="media align-items-md-center">
                        <div class="avatar avatar-xl mr-3">
                            <img src="{{ asset('assets/img/cart-check.png') }}" alt="" class="avatar-img">
                        </div>
                        <div class="media-body">
                            <div class="row align-items-md-center">
                                <div class="col-9 col-md-10 col-lg-8 mb-2 mb-md-0">
                                    <h4 class="">
                                        <a class="text-dark" href="#">{{ $order->UserRequest->category->value }}</a>
                                    </h4>
                                    <span class="d-block">
                                        <span>{{ $order->UserRequest->requirement }}</span>
                                    </span>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <span class="font-size-sm">Created:</span>
                                            <span
                                                class="font-weight-bold text-dark">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($order->created_at))->diffForHumans() }}</span>
                                        </li>

                                        <li class="list-inline-item">
                                            <span class="font-size-sm">Category:</span>
                                            <span
                                                class="font-weight-bold text-dark">{{ ucfirst($order->userRequest->category->value) }}</span>
                                        </li>

                                        <li class="list-inline-item">
                                            <span class="font-size-sm">Total Cost:</span>
                                            <span
                                                class="font-weight-bold text-dark">{{ number_format($order->amount, 2) }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-auto col-lg-4 order-md-last">
                                    <a href="{{ route('seller.order.request', ['order' => $order->id]) }}"
                                        class="btn btn-lg btn-success btn-block mt-md-4 mt-lg-0 m-2"><i
                                            class="tio-checkmark-square-outlined"></i> Mark as Complete
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone={{ $order->seller->whatsapp }}"
                                        class="btn btn-lg btn-outline-success btn-block mt-md-4 mt-lg-0 m-2"><i
                                            class="tio-whatsapp"></i> Contact Whatsapp
                                        <i class="tio-open-in-new"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col mb-3">
                <div class="card card-body">
                    <div class="media align-items-md-center">
                        <div class="avatar avatar-xl mr-3">
                            <img src="{{ asset('assets/img/no-order.png') }}" alt="" class="avatar-img">
                        </div>
                        <div class="media-body">
                            <div class="row align-items-md-center">
                                <div class="col-9 col-md-10 mb-2 mb-md-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">No Active Order Found</a>
                                    </h4>

                                    <span class="d-block">
                                        <span>You Don't have any On Going Order, go to Request Center and Post your Requets
                                            to start using our service</span>
                                    </span>
                                </div>

                                <div class="col-sm-auto order-md-last">
                                    <a href="{{ route('seller.request.index') }}"
                                        class="btn btn-lg btn-outline-success btn-block">Check new Request <i
                                            class="tio-open-in-new"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
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
                        @forelse ($transactions as $transaction)
                            <li class="list-group-item">
                                <div class="media">
                                    <img class="avatar avatar-sm avatar-circle mr-3"
                                        src="{{ asset('assets/img/finance.png') }}" alt="Image Description">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-7 col-md-5 order-md-1">
                                                <h5
                                                    class="mb-0 text-{{ $transaction->sum == '+' ? 'success' : 'danger' }} text-uppercase">
                                                    {{ $transaction->type }}</h5>
                                                <span class="font-size-sm">Net Income</span>
                                            </div>

                                            <div class="col-5 col-md-4 order-md-3 text-right mt-2 mt-md-0">
                                                <h5
                                                    class="mb-0 text-{{ $transaction->sum == '+' ? 'success' : 'danger' }}">
                                                    {{ $transaction->sum }}
                                                    {{ number_format($transaction->amount, 2) }}</h5>
                                                <span
                                                    class="font-size-sm">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($transaction->created_at))->diffForHumans() }}</span>
                                            </div>

                                            <div class="col-auto col-md-3 order-md-2">
                                                <span
                                                    class="badge badge-soft-{{ $transaction->status == 'pending' ? 'warning' : 'success' }} badge-pill text-uppercase">{{ $transaction->status }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="mb-0 text-danger">No Transaction Found</h5>
                                                <span class="font-size-sm">You Don't have any Activity yet!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
