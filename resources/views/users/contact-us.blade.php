@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Us</h6>
        </div>
        <div class="card-body">
            <div class="card-filter mb-3">
                <form action="{{ route('user-contact-us') }}">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h6 class="m-0 text-primary">Filter results</h3>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 mb-md-0 mb-2">
                            <select class="custom-select" name="subject">
                                <option value="" selected="">Select Subject</option>
                                <option @if ($request->subject == 'Care homes') selected @endif>Care homes</option>
                                <option @if ($request->subject == 'Events') selected @endif>Events</option>
                                <option @if ($request->subject == 'Donation') selected @endif>Donation</option>
                                <option @if ($request->subject == 'Messages for care homes') selected @endif>Messages for care homes</option>
                                <option @if ($request->subject == 'How the website works') selected @endif>How the website works</option>
                                <option @if ($request->subject == 'Other things') selected @endif>Other things</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="name" value="{{ $request->name }}" placeholder="Name Filter"/>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="email" value="{{ $request->email }}" placeholder="Email Filter"/>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-2">
                            <input type="text" class="form-control" name="phone" value="{{ $request->phone }}" placeholder="Phone Filter"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="submit" value="Generate" class="btn btn-success"/>
                            <a href="{{ route('user-contact-us') }}" class="btn btn-danger">Reset</a>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Subject</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Subject</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message ?? 'N/A' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $contacts->render() }}
        </div>
    </div>

@endsection