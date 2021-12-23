@extends('user.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card mb-3 mb-lg-5">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-sm mb-3 mb-sm-0">
                            <h4 class="card-header-title">All Categories</h4>
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
                                    <th>Category</th>
                                    <th>Requirement</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                    <th>Post Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($requests as $request)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $request->category->value }}</td>
                                        <td>{{ $request->requirement }}</td>
                                        <td>{{ number_format($request->budget, 2) }}</td>
                                        <td>{{ Str::ucfirst($request->status) }}</td>
                                        <td>{{ $request->created_at }}</td>
                                        <td class="d-flex justify-content-around">
                                            <a href="javascript:;" class="btn btn-white btn-sm" data-toggle="modal"
                                                data-target="#addAddressModal"><i class="tio-edit mr-1"></i></a>
                                            <form
                                                action="{{ route('user.request.destroy', ['request' => $request->id]) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="tio-add-to-trash mr-1"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <x-edit-request :request="$request" />
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
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
