@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary">Donations</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-warning btn-sm @if (count($donations) == '0') disabled @endif" href="{{ route('donations.export') }}{{ ($request ? "?". http_build_query($request->query()) : '') }}">
                    Export
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('donations') }}">
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
                                <option value="1" @if ($request->status == '1') selected @endif>Approved</option>
                                <option value="0" @if ($request->status == '0') selected @endif>Pending</option>
                                <option value="0" @if ($request->status == '-1') selected @endif>Rejected</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="submit" value="Filter" class="btn btn-success"/>
                            <a href="{{ route('donations') }}" class="btn btn-danger">Reset</a>
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
                            <th>Username</th>
                            <th>Carehome</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Carehome</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($donations as $donate)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $donate->user->name }}</td>
                                <td>{{ $donate->paymentAccount->user->name }}</td>
                                <td>{{ $donate->paymentAccount->paymentMethod->name }}</td>
                                <td>{{ $donate->amount . " JOD"}}</td>
                                <td>
                                    @if ($donate->status == '0')
                                        Pending
                                    @elseif ($donate->status == '1')
                                        Approved
                                    @elseif ($donate->status == '-1')
                                        Rejected
                                    @endif
                               </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $donations->render() }}
        </div>
    </div>

@endsection