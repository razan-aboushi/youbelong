@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary">Subscribed Events</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Reg. Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Reg. Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($evnt_subscriptions as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->event->title }}</td>
                                <td>{{ $event->event->date }}</td>
                                <td>{{ $event->created_at ?? 'N/A' }}</td>
                                <td>
                                    @if (now() >= $event->event->date)
                                        Expired
                                    @else 
                                        <a class="btn btn-danger btn-sm" href="{{ route('reserve-event-seat', $event->event_id) }}">Cancel</a>
                                    @endif
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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-left">
                <h6 class="m-0 font-weight-bold text-primary">Donations</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Payment Method</th>
                            <th>Care Home</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Payment Method</th>
                            <th>Care Home</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($user_transactions as $donation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $donation->paymentAccount->paymentMethod->name }}</td>
                                <td>{{ $donation->paymentAccount->user->name }}</td>
                                <td>{{ $donation->amount . " JOD" }}</td>
                                <td>{{ $donation->created_at }}</td>
                                <td>{{ $donation->status ? 'Approved' : 'Rejected'}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No data available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
