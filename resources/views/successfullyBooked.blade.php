@section('title', '| Successfully Booked')
@section('PageName', 'Successfully Booked')
@extends('FrontEnd.app')
@section('FrontEndContent')
    @include('FComponent.header')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <i class="fas fa-check-circle text-success" style="font-size: 70px"></i>
                <h2 class="mt-3" style="text-shadow: 0px 0px 1px green">Successfully Booked</h2>
                <p>Thank you for booking ticket</p>
            </div>
        </div>
    </div>
@endsection
