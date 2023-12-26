@section('title', '| Create Trip')
@section('PageName', 'Create Trip')
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
                            <h5>Create New Routes</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.trip.create.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Route</label>
                                    <select class="form-control" id="form" name="route">
                                        @foreach ($route as $data)
                                        <option @if(old("route") == $data['id']) selected @endif value="{{ $data['id'] }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Starting Date</label>
                                    <input type="date" name="startingDate" value="{{ old("startingDate") }}" class="form-control" min="{{ now()->format('Y-m-d') }}" placeholder="Starting Time">
                                </div>
                                <div class="form-group">
                                    <label for="">Starting Time</label>
                                    <input type="time" name="startingTime" value="{{ old("startingTime") }}" class="form-control" placeholder="Starting Time">
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


