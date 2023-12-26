@section('title', '| Edit Bus')
@section('PageName', 'Edit Bus')
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
                            <h5>Update New Routes</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.buses.update.post', base64_encode($data->id)) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Bus Name</label>
                                    <input type="name" value="{{ $data->name }}"  class="form-control" placeholder="Bus Name" disabled>
                                </div>
                                <input type="text" name="id" value="{{ base64_encode($data->id) }}" hidden>
                                <div class="form-group">
                                    <label for="">Total Seat</label>
                                    <input type="number" value="{{ $data->totalSeat }}" name="totalSeat" class="form-control" min="0" placeholder="Total Seat">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status">
                                        <option @if($data->status == 0) selected @endif value="0">Active</option>
                                        <option @if($data->status == 1) selected @endif value="1">Deactive</option>
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


