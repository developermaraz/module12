@section('title', '| Profile')
@section('PageName', 'Profile')
@extends('BackEnd.app')
@section('BackEndContent')
    {{-- Start Main content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h4><b>Profile Information</b></h4>
                            <p>Update your account's profile information and email address.</p>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <button class="btn btn-md btn-success w-100">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h4><b>Update Password</b></h4>
                            <p>Ensure your account is using a long, random password to stay secure.</p>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <button class="btn btn-md btn-success w-100">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h4><b>Delete Account</b></h4>
                            <p>Once your account is deleted, all of its resources and data will be permanently deleted.
                                Before deleting your account, please download any data or information that you wish to
                                retain.</p>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <button type="button" class="btn btn-md btn-danger" data-toggle="modal"
                                    data-target="#staticBackdrop">Delete Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel"><b>Are you sure you want to delete your account?</b>
                        <br>
                        Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="password" class="form-control" placeholder="Password">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">DELETE ACCOUNT</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Main content --}}
@endsection
