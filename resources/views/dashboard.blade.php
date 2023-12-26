@section('title', '| Dashboard')
@section('PageName', 'Dashboard')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['todayCost'] }}</h3>
                            <p>Today Revenue</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['yesterdayCost'] }}</h3>
                            <p>Yesterday Revenue</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $data['thisMonthCost'] }}</h3>
                            <p>This Month</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $data['lastMonthCost'] }}</h3>
                            <p>Last Month</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['totalBus'] }}</h3>
                            <p>Total Bus</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['totalRoute'] }}</h3>
                            <p>Total Route</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-road"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $data['totalTrip'] }}</h3>
                            <p>Total Trip</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['activeTrip'] }}</h3>
                            <p>Active Trip</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-running"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['doneTrip'] }}</h3>
                            <p>Finished Route</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['user'] }}</h3>
                            <p>Total Customer</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-running"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['admin'] }}</h3>
                            <p>Total Admin</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    {{-- End Main content --}}
@endsection
