@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
        </div>
        <div class="card-body">
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
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $article->name }}</td>
                                <td>{{ $article->email }}</td>
                                <td>{{ $article->phone ?? 'N/A' }}</td>
                                <td>{{ $article->address ?? 'N/A' }}</td>
                                <td>{{ $article->role->name }}</td>
                                <td>{{ $article->approved ? 'Active' : 'Inactive'}}</td>
                                <td>{{ $article->created_at ?? 'N/A' }}</td>
                                <td>
                                    <a class="btn {{ $article->approved ? 'btn-danger' : 'btn-success' }}" 
                                        href="{{ route('profile-status', $article->id) }}">{{ $article->approved ? 'suspend' : 'activate' }}
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
            {{ $articles->render() }}
        </div>
    </div>

@endsection