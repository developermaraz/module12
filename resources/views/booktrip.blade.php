@section('title', '| Book Trip')
@section('PageName', 'Book Trip')
@extends('FrontEnd.app')
@section('FrontEndContent')
    @include('FComponent.header')
    <div class="container">
       <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h3>Book Trip</h3>
        </div>
        <div class="col-md-12">
            <form action="front.book.trip.post" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                </div>
                <input type="text" name="id" value="{{ $data['id'] }}" hidden>
                <input type="text" name="seat" value="{{ $data['seat'] }}" hidden>
                <div class="mb-3">
                    <label for="">Mobile Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}">
                </div>
                <button class="btn btn-md w-100 btn-success" type="submit">Submit</button>
            </form>
        </div>
       </div>
    </div>
@endsection
