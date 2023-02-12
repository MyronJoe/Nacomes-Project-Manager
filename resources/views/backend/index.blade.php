@extends('backend.backend_master')

@section('content')


@php

$year = date('Y');
    $total_project = App\Models\Backend\Project::latest()->get();

    $year_project = App\Models\Backend\Project::where('this_year', $year)->get();

    $total_admin = App\Models\User::where('user_type', 1)->get();
    $projects = App\Models\Backend\Project::latest()->paginate(5);
@endphp







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
                <i data-feather='book'></i>
            </div>
          </div>
          <h2 class="fw-bolder">{{ count($total_project) }}</h2>
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
          <h2 class="fw-bolder">{{ count($year_project) }}</h2>
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
          <h2 class="fw-bolder">{{ count( $total_admin) }}</h2>
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





















<hr>







<div class="row">
     <br>
    <div class="col-md-12 ">

        <div class="card">

            <div class="card-header with-border">
                <h3 class="card-title ">Manage Projects</h3>
            </div>

            <!-- /.box-header -->
            <div class="card-body">

                <div class="table-responsive ">

                    <table id="example1" class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>Title</th>
                                <th>Academic Year</th>
                                <th>Student</th>
                                <th>Date</th>


                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>

                                    <td>{{ $project->title }} </td>

                                    <td>{{ $project->year }}</td>

                                    <td>{{ $project->student }}</td>
                                    <td>{{ $project->created_at->diffForHumans() }}</td>
                                    <td>
                                        {{-- <a href="{{ route('download', $project->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-eye"></i>download</a> --}}

                                                <a href="{{ route('edit-project', $project->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-eye"></i>Edit</a>

                                        <a href="{{ route('admin-delete-project', $project->id) }}" class="btn btn-danger btn-sm" id="delete"><i
                                                class="fa fa-eye"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
            <!-- /.box-body -->
            {{ $projects->links() }}
        </div>

        <!-- /.box -->
    </div>

</div>




</div>
</div>
</div>
</div>
</div>
</section>
<!-- Modal Sizes end -->







































@endsection
