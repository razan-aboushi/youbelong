@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary mt-2">Advertisements</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-success btn-sm" href="{{ route('advertisements.create') }}">Create</a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('advertisements.index') }}">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h6 class="m-0 text-primary">Filter results</h3>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="advertiser" value="{{ $request->advertiser }}" placeholder="Advertiser Filter"/>
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-control">
                                <option value="">Status</option>
                                <option value="1" @if ($request->status == '1') selected @endif>Active</option>
                                <option value="0" @if ($request->status == '0') selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="submit" value="Generate" class="btn btn-success"/>
                            <a href="{{ route('advertisements.index') }}" class="btn btn-danger">Reset</a>
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
                            <th>Advertiser</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Price</th>
                            <th>Clicks</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Advertiser</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Price</th>
                            <th>Clicks</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($advertisements as $advertisement)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $advertisement->advertiser }}</td>
                                <td>{{ $advertisement->start_date }}</td>
                                <td>{{ $advertisement->end_date }}</td>
                                <td>{{ $advertisement->price }}</td>
                                <td>{{ $advertisement->clicks }}</td>
                                <td>{{ $advertisement->status ? 'Active' : 'Inactive'}}</td>
                                <td class="action-btns">
                                    <a class="btn btn-info btn-sm" href="{{ route('advertisements.edit', $advertisement->id) }}">Edit</a>
                                    <form action="{{ route('advertisements.destroy', $advertisement->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $advertisements->render() }}
        </div>
    </div>

@endsection