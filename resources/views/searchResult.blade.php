@section('title', '| Result')
@section('PageName', 'Result')
@extends('FrontEnd.app')
@section('FrontEndContent')
    @include('FComponent.header')
    <div class="container">
            @foreach ($result as $row)
                <div class="row mt-4 p-3" style="border: 1px solid red; box-shadow: 0px 0px 3px 1px red; border-radius: 6px;">
                    <div class="col-md-12">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <h5 class="text-danger">{{ $row->route->bus->name }}</h5>
                                <p><b>Route:</b> {{ $row->route->name }}</p>
                            </div>
                            <div class="col-md-3">
                                <h6><b>Starting Date:</b> {{ $row['startingDate'] }}</h6>
                                <h6><b>Starting Time:</b> {{ $row['startingTime'] }}</h6>
                            </div>
                            <div class="col-md-3">
                                <h5><b>Total Seat:</b> {{ $row->route->bus->totalSeat - $row->seatReserve }}</h5>
                            </div>
                            <div class="col-md-3">
                                <h5><b>Price:</b> ৳ {{ $row->route->price }}</h5>
                                @if ($wantSeat <= $row->route->bus->totalSeat - $row->seatReserve)
                                    <a href="{{ route('front.book.trip', [base64_encode($row->id), base64_encode($wantSeat)]) }}"
                                        class="btn btn-sm w-100 btn-success">Book</a>
                                @elseif($wantSeat > $row->route->bus->totalSeat - $row->seatReserve)
                                    <button class="btn btn-sm btn-danger w-100">Unavailable To Book</button>
                                @elseif($row->route->bus->totalSeat - $row->seatReserve == 0)
                                    <button class="btn btn-sm btn-danger w-100">Unavailable To Book</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @if (empty($result))
            <div class="row mt-5" style="border: 1px solid red; box-shadow: 0px 0px 3px 1px red; border-radius: 6px;">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-12 bg-danger text-center text-white p-3">
                            <h4><b class="text-white">No Trip Found</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
