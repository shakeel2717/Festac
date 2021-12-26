@extends('user.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        @foreach ($UserRequest as $request)
            <div class="col-12 mb-3">
                <div class="card card-body">
                    <div class="media align-items-md-center">
                        <img class="d-none d-md-block avatar mr-3 mr-lg-4" src="{{ asset('assets/img/cart-full.png') }}"
                            alt="Image Description">

                        <div class="media-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span
                                        class="badge badge-soft-secondary p-2 mb-2">{{ ucfirst($request->status) }}</span>

                                    <a
                                        href="{{ route('user.request.receivedShow', ['id' => $request->userRequest->id]) }}">
                                        <h3 class="mb-1 text-uppercase">
                                            {{ ucfirst($request->userRequest->category->value) }}</h3>

                                        <p>{{ ucfirst($request->userRequest->requirement) }}</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="font-size-sm">Created:</span>
                                                <span
                                                    class="font-weight-bold text-dark">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($request->created_at))->diffForHumans() }}</span>
                                            </li>

                                            <li class="list-inline-item">
                                                <span class="font-size-sm">Category:</span>
                                                <span
                                                    class="font-weight-bold text-dark">{{ ucfirst($request->userRequest->category->value) }}</span>
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
                                    </a>
                                </div>

                                <div class="col-12 col-md-auto justify-content-md-end mb-3">
                                    <div class="m-2 text-center">
                                        <img src="{{ asset('assets/img/cart-money.png') }}" alt="Cart" width="100">
                                        <a href="{{ route('user.request.receivedShow', ['id' => $request->userRequest->id]) }}"
                                            class=" mt-2 btn btn-lg btn-block btn-outline-success">View all
                                            Offers <i class="tio-checkmark-circle-outlined"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
