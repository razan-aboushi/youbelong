@extends('layouts.user')
@section('content')

    <div class="row">
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $number_of_users }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $number_of_articles }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Contact Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $number_of_contact_us }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
