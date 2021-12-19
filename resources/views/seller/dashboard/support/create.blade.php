@extends('seller.dashboard.layout.app')
@section('title')
    Seller Support Center
@endsection
@section('content')
    <h3 class="display-4">Seller Support Center</h3>
    <hr>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card shadow-lg border-primary">
                <div class="card-header mx-auto">
                    <div class="support-image">
                        <img src="{{ asset('assets/img/headset.png') }}" alt="Support Center">
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title text-center">Support Center</h2>
                        <a href="{{ route('seller.support.index') }}" class="btn btn-sm btn-primary">View all Tickets</a>
                    </div>
                    <hr>
                    <form action="{{ route('seller.support.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="js-select2-custom custom-select" name="subject" id="subject"> size="1"
                                        style="opacity: 0;"
                                        <option value="">Select Subject</option>
                                        @forelse ($issue as $option)
                                            <option value="{{ $option->id }}">{{ $option->value }}</option>
                                        @empty
                                            <option value="">No Issue Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                        placeholder="Type Your Message in Complet Detail."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Send to Support
                                        Team</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
