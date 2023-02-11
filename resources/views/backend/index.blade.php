@extends('backend.backend_master')

@section('content')










<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- users list start -->
        <section class="app-user-list">
            <div class="row">







    <div class="col-6 col-sm-4 col-lg-3 col-xl-4 col-md-4">
      <div class="card text-center">
        <div class="card-body">
            <a href="">
          <div class="avatar bg-light-info p-50 mb-1">
            <div class="avatar-content">
                <i data-feather='dollar-sign'></i>
            </div>
          </div>
          <h2 class="fw-bolder">#</h2>
          <p class="card-text">Total Projects</p>
        </a>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-2 col-xl-4 col-md-4">
      <div class="card text-center">
        <div class="card-body">
            <a href="">
          <div class="avatar bg-light-warning p-50 mb-1">
            <div class="avatar-content">
                <i data-feather='wifi'></i>
            </div>
          </div>
          <h2 class="fw-bolder">#</h2>
          <p class="card-text">Project Uploaded This Year</p>
        </a>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-3 col-xl-4 col-md-4">
      <div class="card text-center">
        <div class="card-body">
            <a href="">
          <div class="avatar bg-light-danger p-50 mb-1">
            <div class="avatar-content">
                <i data-feather='tv'></i>
            </div>
          </div>
          <h2 class="fw-bolder">#</h2>
          <p class="card-text">Total Admin</p>
            </a>
        </div>
      </div>
    </div>




























            <!-- list and filter end -->
        </section>
        <!-- users list ends -->

    </div>
</div>



















<div class="row">

    <div class="col-md-12 ">

        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title ">Recent Projects</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>Email</th>
                                <th>Name</th>

                                <th>Last Seen</th>
                                <th>Signup Date</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>

                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td>

                                    </td>

                                    <td></td>
                                    <td>
                                        <a href=" class="btn btn-info"><i
                                                class="fa fa-eye"></i>View</a>
                                    </td>
                                </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
            {{-- <!--{{ $users->links() }}--> --}}
        </div>

        <!-- /.box -->
    </div>

</div>















































@endsection
