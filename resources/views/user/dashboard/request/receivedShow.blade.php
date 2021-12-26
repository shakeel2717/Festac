@extends('user.layout.app')
@section('title')
    Offer Received on my Request
@endsection
@section('content')
    <div class="row">
        @foreach ($user_request as $request)
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
                                    <h3 class="mb-1 text-uppercase">
                                        {{ DB::table('users')->find($request->seller_id)->name }}</h3>
                                    <p>{{ ucfirst($request->message) }}</p>
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
                                    </ul>
                                </div>

                                <div class="col-auto justify-content-md-end ml-3 mb-3">
                                    <div class="m-2 d-flex flex-column">
                                        <form action="{{ route('user.request.receivedAccept') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="offer_id" value="{{ $request->id }}">
                                            <input type="hidden" name="user_requests_id" value="{{ $request->userRequest->id }}">
                                            <button type="submit" class="btn btn-outline-primary btn-lg px-5 mb-2">Accept Offer <i
                                                    class="tio-checkmark-circle-outlined"></i></button>
                                        </form>
                                        <a href="https://api.whatsapp.com/send?phone={{ DB::table('users')->find($request->seller_id)->whatsapp }}"
                                            class="btn btn-lg btn-success btn-block" target="_blank">
                                            Contact Whatsapp
                                            <i class="tio-whatsapp"></i>
                                        </a>
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
