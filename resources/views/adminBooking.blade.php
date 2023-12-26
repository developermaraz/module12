@section('title', '| Booking')
@section('PageName', 'Booking')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h5>Booking Table</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table text-center table-bordered">
                                        <tr class="bg-dark">
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>Trip Name</th>
                                            <th>Trip Date</th>
                                            <th>Trip Time</th>
                                            <th>Total Ticket</th>
                                            <th>Per Cost</th>
                                            <th>Total Cost</th>
                                            <th>Action</th>
                                        </tr>
                                        @php $id =1; @endphp
                                        @foreach ($data as $row)
                                            <tr id="row_{{ $row->id }}">
                                                <td>@php echo $id++ @endphp</td>
                                                <td>{{ $row->user->name }}</td>
                                                <td>{{ $row->trip->route->name }}</td>
                                                <td>{{ $row->trip->startingDate }}</td>
                                                <td>{{ $row->trip->startingTime }}</td>
                                                <td>{{ $row->totalMember }}</td>
                                                <td>{{ $row->perCost }}</td>
                                                <td>{{ $row->TotalCost }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteConf({{ $row->id }})"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                {{-- {{ $row }} --}}
                                            </tr>
                                        @endforeach
        
                                    </table>
                                </div>
                            </div>
                            
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
                text: "Do you want to delete this Booking?",
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
                        url: "{{ route('admin.book.delete') }}",
                        type: 'get',
                        dataType: 'html',
                        data: 'busId=' + id,
                        success: function(response) {
                            if (response === 'success') {
                                $('#row_'+id).hide('slow');
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
