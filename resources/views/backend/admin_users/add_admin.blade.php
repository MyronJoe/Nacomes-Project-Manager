@extends('backend.backend_master')
@section('content')

<!-- Session Form Start -->
<section>
    <div class="row">
        <br>
        <div class="col-md-12 ">
            <div class="card">
            <!-- @include('backend.include.successmsg') -->
                <div class="card-header with-border">
                    <h3 class="card-title ">Academic Sessions</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('save_admin') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label mb-1">Name</label>
                                    <input type="text" id="" class="form-control" placeholder="user name" name="name" required />
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label mb-1">Email</label>
                                    <input type="email" id="" class="form-control" placeholder="user email" name="email" required />
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label mb-1">Password</label>
                                    <input type="password" id="" class="form-control" placeholder="user password" name="email" required />
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label mb-1">Confirm Password</label>
                                    <input type="password" id="" class="form-control" placeholder="confirm password" name="confirm_pass" required />
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <input type="checkbox" id="super_admin" class="" name="super_admin"/>
                                    <label class="form-label mb-1" for="super_admin">Make Super Admin</label>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Make Admin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Session Form End -->

@endsection