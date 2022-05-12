@extends('layouts.user')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-warning btn-sm @if (count($users) == '0') disabled @endif" href="{{ route('users.export') }}{{ ($request ? "?". http_build_query($request->query()) : '') }}">
                    Export
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('users') }}">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h6 class="m-0 text-primary">Filter results</h3>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="name" value="{{ $request->name }}"
                                placeholder="Name Filter" />
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="email" class="form-control" name="email" value="{{ $request->email }}"
                                placeholder="Email Filter" />
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="phone" value="{{ $request->phone }}"
                                placeholder="Phone Filter" />
                        </div>
                        <div class="col-md-3">
                            <select name="approved" class="form-control">
                                <option value="">Status</option>
                                <option value="1" @if ($request->approved == '1') selected @endif>Active</option>
                                <option value="0" @if ($request->approved == '0') selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="submit" value="Filter" class="btn btn-success" />
                            <a href="{{ route('users') }}" class="btn btn-danger">Reset</a>
                        </div>
                    </div>
                </form>
            </div>

            @if (\Session::has('message'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info small">{!! \Session::get('message') !!}</div>
                    </div>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>ِAddress</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Reg. Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>ِAddress</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Reg. Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@php $profile = $user->profile ? asset('storage/profiles/'.$user->profile) : asset('img/default-profile.jpg') @endphp
                                    <span class="profile-img mr-2"
                                        style="background-image: url('{{ $profile }}')"></span>
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone ?? 'N/A' }}</td>
                                <td>{{ $user->address ?? 'N/A' }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->approved ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $user->created_at ?? 'N/A' }}</td>
                                <td>
                                    <a class="btn {{ $user->approved ? 'btn-danger' : 'btn-success' }} btn-sm"
                                        href="{{ route('profile-status', $user->id) }}">{{ $user->approved ? 'suspend' : 'activate' }}
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $users->render() }}
        </div>
    </div>
@endsection
