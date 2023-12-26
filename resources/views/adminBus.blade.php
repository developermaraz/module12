@section('title', '| Buses')
@section('PageName', 'Buses')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3 text-right">
                    <a href="{{ route('admin.buses.create') }}" class="btn btn-sm btn-success"><b><i
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
                                    <th>Total Seat</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @php $id = 1; @endphp
                                @foreach ($data as $row)
                                    <tr id="row_{{ $row->id }}">
                                        <td>@php echo $id++ @endphp</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->totalSeat }}</td>
                                        <td>{{ $row->created_at->format('F d, Y') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                                {{ $row->status == 0 ? 'Active' : 'Deactive' }}
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.buses.update', base64_encode($row->id)) }}"
                                                class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                            <button onclick="deleteConf({{ $row->id }})"
                                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
    <script>
        function deleteConf(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this bus?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    $.ajax({
                        url: "{{ route('admin.bus.delete') }}",
                        type: 'get',
                        dataType: 'html',
                        data: 'busId=' + id,
                        success: function(response) {
                            if (response === 'success') {
                                $('#row_' + id).hide('slow');
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Successfully Delete Bus'
                                });
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Something Problem'
                                });
                            }
                        }
                    });
                }
            })
        }
    </script>
    {{-- End Main content --}}
@endsection
