@section('title', '| Edit Trip')
@section('PageName', 'Edit Trip')
@extends('BackEnd.app')
@section('BackEndContent')

    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-right">
                    <a href="{{ route('admin.trips') }}" class="btn btn-sm btn-warning"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h5>Update New Trip</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.trip.update.post', base64_encode($Trip->id))}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Trip</label>
                                    <input type="text" class="form-control" value="{{ $Trip->route->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Starting Date</label>
                                    <input type="date" name="startingDate" min="{{ now()->format('Y-m-d') }}" value="{{ old("startingDate") }}" class="form-control" placeholder="Starting Time">
                                </div>
                                <div class="form-group">
                                    <label for="">Starting Time</label>
                                    <input type="time" name="startingTime" value="{{ old("startingTime") }}" class="form-control" placeholder="Starting Time">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status">
                                        <option @if($Trip->status == "0") selected @endif @if(old("status") == "0") selected @endif value="0">Active</option>
                                        <option @if($Trip->status == "1") selected @endif @if(old("status") == "1") selected @endif value="1">Finish</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    {{-- End Main content --}}
@endsection


