@extends('seller.dashboard.layout.app')
@section('title')
    Seller Support
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card mb-3 mb-lg-5">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-sm mb-3 mb-sm-0">
                            <h4 class="card-header-title">All Support Tickets</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="tio-search"></i>
                            </span>
                        </div>
                        <input id="search" type="search" class="form-control" placeholder="Search Record"
                            aria-label="Search Record">
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Create Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($supports as $support)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $support->issue }}</td>
                                        <td>{{ $support->message }}</td>
                                        <td class="text-uppercase">{{ $support->status }}</td>
                                        <td>{{ $support->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    {{ $supports->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
