@extends('user.layout.app')
@section('title')
    Requested Orders
@endsection
@section('content')
    <div class="row">
        @forelse ($orders as $order)
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
                                    <form action="{{ route('user.order.accept') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                                        <button class="btn btn-lg btn-success btn-block mt-md-4 mt-lg-0"><i
                                                class="tio-checkmark-square-outlined"></i> Accept Delivery
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
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
                                        <a class="text-dark" href="#">No Due Orders Found</a>
                                    </h4>

                                    <span class="d-block">
                                        <span>You Don't have any On Going Order, go to Request Center and Post your Requets
                                            to start using our service</span>
                                    </span>
                                </div>

                                <div class="col-sm-auto order-md-last">
                                    <a href="{{ route('user.request.create') }}"
                                        class="btn btn-lg btn-outline-success btn-block">Post your Request <i
                                            class="tio-open-in-new"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
