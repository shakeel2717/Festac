@extends('user.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    @forelse ($offers as $offer)
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
                                <span class="badge badge-soft-secondary p-2 mb-2">{{ Str::ucfirst($offer->status) }}</span>
                                <a href="{{ route('user.request.receivedShow', ['id' => $offer->UserRequest->id]) }}">
                                    <h3 class="mb-1">{{ $offer->UserRequest->category->value }}</h3>
                                    <p>{{ $offer->UserRequest->requirement }}</p>
                                </a>
                            </div>

                            <div class="col-auto justify-content-md-end ml-3">
                                <!-- Avatar Group -->
                                <div class="m-2">
                                    <img src="{{ asset('assets/img/cart-money.png') }}" alt="Offer">
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
                                    class="font-weight-bold text-dark">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($offer->created_at))->diffForHumans() }}</span>
                            </li>

                            <li class="list-inline-item">
                                <span class="font-size-sm">Category:</span>
                                <span class="font-weight-bold text-dark">{{ $offer->UserRequest->category->value }}</span>
                            </li>

                            <li class="list-inline-item">
                                <span class="font-size-sm">Budget:</span>
                                <span class="font-weight-bold text-dark">{{ number_format($offer->budget, 2) }}</span>
                            </li>

                            <li class="list-inline-item">
                                <span class="font-size-sm">Offers Received:</span>
                                <span class="font-weight-bold text-dark">0</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{ $offers->links() }}
    @empty
        <div class="col-12">
            <div class="alert alert-info">
                <h4 class="alert-heading">No Requests Yet!</h4>
                <p>You have not received any requests yet. Please check back later.</p>
            </div>
        </div>
    @endforelse
@endsection
