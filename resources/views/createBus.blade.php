@section('title', '| Create Bus')
@section('PageName', 'Create Bus')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-right">
                    <a href="{{ route('admin.buses') }}" class="btn btn-sm btn-warning"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h5>Create New Bus</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.buses.create.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Bus Name</label>
                                    <input type="name" name="busName" value="{{ old("busName") }}" class="form-control" placeholder="Bus Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Total Seat</label>
                                    <input type="number" name="totalSeat" value="{{ old("totalSeat") }}" class="form-control" placeholder="Total Seat">
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


