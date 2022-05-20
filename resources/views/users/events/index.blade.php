@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary mt-2">Events</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-success btn-sm" href="{{ route('events.create') }}">Add</a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('events.index') }}">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h6 class="m-0 text-primary">Filter results</h3>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="title" value="{{ $request->title }}" placeholder="Title Filter"/>
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-control">
                                <option value="">Status</option>
                                <option value="1" @if ($request->status == '1') selected @endif>Published</option>
                                <option value="0" @if ($request->status == '0') selected @endif>Draft</option>
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
                            <a href="{{ route('events.index') }}" class="btn btn-danger">Reset</a>
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
                            <th>Title</th>
                            <th>Number of reservation</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Number of reservation</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->users_count }}</td>
                                <td>{{ $event->created_at ?? 'N/A' }}</td>
                                <td class="action-btns">
                                    <a class="btn btn-info btn-sm" href="{{ route('events.edit', $event->id) }}">Edit</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a class="btn btn-secondary btn-sm" href="{{ route('user-events', $event->id) }}">Reservations</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection