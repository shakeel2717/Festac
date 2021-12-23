@extends('seller.dashboard.layout.app')
@section('title')
    Seller Dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller Code: {{ Auth::user()->code }}</h3>
    <hr>
    <div class="row">
        @forelse ($requests as $request)
            <div class="col-12 mb-3">
                <!-- Card -->
                <div class="card card-body">
                    <div class="media align-items-md-center">
                        <!-- Avatar -->
                        <img class="d-none d-md-block avatar mr-3 mr-lg-4" src="{{ asset('assets/img/open.png') }}"
                            alt="Image Description">

                        <div class="media-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span
                                        class="badge badge-soft-secondary p-2 mb-2">{{ Str::ucfirst($request->status) }}</span>

                                    <h3 class="mb-1">{{ $request->category->value }}</h3>
                                    <p>{{ $request->requirement }}</p>
                                </div>

                                <div class="col-auto justify-content-md-end ml-3 mb-3">
                                    <!-- Avatar Group -->
                                    <div class="avatar-group avatar-group-sm avatar-circle">
                                        <a href="https://api.whatsapp.com/send?phone={{ $request->user->whatsapp }}"
                                            class="btn btn-lg btn-success" target="_blank">
                                            Contact Whatsapp
                                            <i class="tio-whatsapp"></i>
                                        </a>
                                    </div>
                                    <!-- End Avatar Group -->
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Stats -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="font-size-sm">Created:</span>
                                    <span
                                        class="font-weight-bold text-dark">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($request->created_at))->diffForHumans() }}</span>
                                </li>

                                <li class="list-inline-item">
                                    <span class="font-size-sm">Category:</span>
                                    <span class="font-weight-bold text-dark">{{ $request->category->value }}</span>
                                </li>

                                <li class="list-inline-item">
                                    <span class="font-size-sm">Budget:</span>
                                    <span
                                        class="font-weight-bold text-dark">{{ number_format($request->budget, 2) }}</span>
                                </li>

                                <li class="list-inline-item">
                                    <span class="font-size-sm">Offers Received:</span>
                                    <span class="font-weight-bold text-dark">0</span>
                                </li>

                            </ul>
                            <!-- End Stats -->
                            <a class="stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    <h4 class="alert-heading">No Requests Yet!</h4>
                    <p>You have not received any requests yet. Please check back later.</p>
                </div>
            </div>
        @endforelse

    </div>
@endsection
