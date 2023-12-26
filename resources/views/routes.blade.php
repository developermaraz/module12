@section('title', '| Rotues')
@section('PageName', 'Rotues')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3 text-right">
                    <a href="{{ route('admin.routes.create') }}" class="btn btn-sm btn-success"><b><i
                                class="fas fa-plus-circle"></i> Create</b></a>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h5>Routes Table</h5>
                        </div>
                        <div class="card-body">
                            <table class="table text-center table-bordered">
                                <tr class="bg-dark">
                                    <th>#</th>
                                    <th>Bus Name</th>
                                    <th>Route Name</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @php $id = 1; @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <td>@php echo $id++ @endphp</td>
                                        <td>{{ $row['bus']['name'] }}</td>
                                        <td>{{ $row['name'] }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td>{{ $row->created_at->format('F d, Y') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                                {{ $row->status == 0 ? 'Active' : 'Deactive' }}
                                            </button>
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.route.update', base64_encode($row->id)) }}"
                                                class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    {{-- End Main content --}}
@endsection
