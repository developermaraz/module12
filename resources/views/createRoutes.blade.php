@section('title', '| Create Rotues')
@section('PageName', 'Create Rotues')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-right">
                    <a href="{{ route('admin.routes') }}" class="btn btn-sm btn-warning"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h5>Create New Routes</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.routes.create.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Bus</label>
                                    <select class="form-control" id="form" name="busName">
                                        @foreach ($bus as $data)
                                        <option @if(old("busName") == $data['id']) selected @endif value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">From</label>
                                    <select class="form-control" id="form" name="form">
                                        <option @if(old("form") == "Dhaka") selected @endif value="Dhaka">Dhaka</option>
                                        <option @if(old("form") == "Comilla") selected @endif value="Comilla">Comilla</option>
                                        <option @if(old("form") == "Cox's Bazaar") selected @endif value="Cox's Bazaar">Cox's Bazaar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">To</label>
                                    <select class="form-control" name="to">
                                        <option @if(old("to") == "Dhaka") selected @endif value="Dhaka">Dhaka</option>
                                        <option @if(old("to") == "Comilla") selected @endif value="Comilla">Comilla</option>
                                        <option @if(old("to") == "Cox's Bazaar") selected @endif value="Cox's Bazaar">Cox's Bazaar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Cost</label>
                                    <input type="number" value="{{ old("cost") }}" name="cost" class="form-control" min="0" placeholder="Cost">
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


