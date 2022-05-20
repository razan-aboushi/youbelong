@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary mt-2">Payemtn Methods</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-success btn-sm" href="{{ route('payment-methods.create') }}">Add</a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('payment-methods.index') }}">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h6 class="m-0 text-primary">Filter results</h3>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="name" value="{{ $request->name }}" placeholder="Name Filter"/>
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-control">
                                <option value="">Status</option>
                                <option value="1" @if ($request->status == '1') selected @endif>Active</option>
                                <option value="0" @if ($request->status == '0') selected @endif>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">From</span>
                                </div>
                                <input type="date" class="form-control" name="from_date" value="{{ $request->from_date }}" placeholder="From Date Filter" />
                            </div>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">To</span>
                                </div>
                                <input type="date" class="form-control" name="to_date" value="{{ $request->to_date }}" placeholder="From Date Filter" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="submit" value="Filter" class="btn btn-success"/>
                            <a href="{{ route('payment-methods.index') }}" class="btn btn-danger">Reset</a>
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
                <table class="table table-bordered table-hover datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($payment_methods as $method)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $method->name }}</td>
                                <td>{{ $method->status ? 'Active' : 'Inactive'}}</td>
                                <td>{{ $method->created_at ?? 'N/A' }}</td>
                                <td class="action-btns">
                                    <a class="btn btn-info btn-sm" href="{{ route('payment-methods.edit', $method->id) }}">Edit</a>
                                    <form action="{{ route('payment-methods.destroy', $method->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection