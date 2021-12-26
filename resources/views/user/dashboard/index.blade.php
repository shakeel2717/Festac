@extends('user.layout.app')
@section('title')
    User Dashboard {{ Auth::user()->code }}
@endsection
@section('content')
    <h3 class="display-4">User Dashboard [{{ Auth::user()->code }}]</h3>
    <hr>
    <x-user-warning />
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/analytics.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">My All Request</h6>
                            <span class="display-3 text-dark">{{ $requests->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/analytics.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Pending Response Request</h6>
                            <span class="display-3 text-dark">{{ $requests->where('status', 'open')->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-3">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('assets/img/analytics.png') }}" alt="">
                        </div>
                        <div class="col-9 d-flex align-items-end flex-column">
                            <h6 class="card-subtitle mb-2">Complete Request</h6>
                            <span class="display-3 text-dark">{{ $requests->where('status', 'complete')->count() }}</span>
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
                                    <a href="https://api.whatsapp.com/send?phone={{ $order->seller->whatsapp }}"
                                        class="btn btn-lg btn-outline-success btn-block mt-md-4 mt-lg-0"><i
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
                                    <a href="{{ route('user.request.create') }}"
                                        class="btn btn-lg btn-outline-success btn-block">Post your Request <i
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Find a Service</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.request.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select name="category" id="category"
                                        class="js-select2-custom custom-select form-control">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->value }}</option>
                                        @empty
                                            <option value="">No Category Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="requirement">Requirements</label>
                                    <textarea name="requirement" id="requirement" cols="30" rows="10" class="form-control"
                                        placeholder="Tell us what you need and we will get it for you. eg. Blue shoe size 34"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="budget">Budgets</label>
                                    <input type="text" name="budget" id="budget" class="form-control"
                                        placeholder="Budget">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Submit your
                                        Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>
@endsection
