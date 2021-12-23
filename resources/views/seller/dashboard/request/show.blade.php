@extends('seller.dashboard.layout.app')
@section('title')
    Seller Dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller Code: {{ Auth::user()->code }}</h3>
    <hr>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-lg border-primary">
                <div class="card-header mx-auto">
                    <div class="support-image">
                        <img src="{{ asset('assets/img/cart.png') }}" alt="Support Center">
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title text-center">Send Custom Order</h2>
                        <a href="{{ route('seller.request.index') }}" class="btn btn-sm btn-primary">View all Requests</a>
                    </div>
                    <hr>
                    <form action="{{ route('seller.request.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="js-form-message form-group">
                                        <label for="name">Budget</label>
                                        <input type="text" class="form-control form-control " name="budget" id="budget"
                                            placeholder="Budget">
                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow-lg m-2 border-primary p-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class=" col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputGroupHoverLightFullName"
                                                            class="input-label">Twitter
                                                            Link</label>

                                                        <div class="input-group input-group-merge input-group-hover-light">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupHoverLightFullNameAddOn">
                                                                    <i class="tio-new-message"></i>
                                                                </span>
                                                            </div>
                                                            <textarea name="message" id="message" cols="10" rows="4"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class=" row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-primary btn-lg">Send Custom
                                                Offer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
