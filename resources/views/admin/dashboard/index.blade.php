@extends('admin.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <h3 class="display-4">Users State</h3>
    <hr>
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Total Users</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span class="card-title h2">{{ $users->where('rold', 'user')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Active Users</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'user')->where('status', 'pending')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Pending Users</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'user')->where('status', 'pending')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Suspended Users</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'user')->where('status', 'suspended')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
    </div>
    <h3 class="display-4">Sellers State</h3>
    <hr>
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Total Seller</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span class="card-title h2">{{ $users->where('rold', 'seller')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Active Seller</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'seller')->where('status', 'pending')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Pending Seller</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'seller')->where('status', 'pending')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <a class="card card-hover-shadow h-100" href="#">
                <div class="card-body">
                    <h6 class="card-subtitle">Suspended Seller</h6>

                    <div class="row align-items-center gx-2 mb-1">
                        <div class="col-6">
                            <span
                                class="card-title h2">{{ $users->where('rold', 'seller')->where('status', 'suspended')->count() }}</span>
                        </div>
                    </div>
                    <span class="text-body font-size-sm ml-1">Sync: Just now</span>
                </div>
            </a>
        </div>
    </div>
@endsection
