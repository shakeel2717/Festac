@extends('admin.layout.app')
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
                                    <th>Full Name</th>
                                    <th>User Code</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->code }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ Str::ucfirst($user->status) }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-white btn-sm" data-toggle="modal"
                                                data-target="#addAddressModal"><i class="tio-edit mr-1"></i></a>
                                            <a href="{{ route('admin.users.suspend', ['user' => $user->id]) }}"
                                                class="btn btn-danger btn-sm"><i class="tio-add-to-trash mr-1"></i></a>
                                        </td>
                                        <x-edit-user :user="$user" />
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
