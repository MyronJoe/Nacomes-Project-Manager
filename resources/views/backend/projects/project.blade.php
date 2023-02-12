@extends('backend.backend_master')
@section('content')
    <!-- list and filter end -->
    </section>
    <!-- users list ends -->

    </div>
    </div>



















    <div class="row">
        <div class="col-12">
            <a href=""></a>


            <a href="{{ route('project-upload') }}" class="btn btn-primary  py-1 mb-2" style="float: right"> Upload a Project
            </a>





        </div> <br>
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
                                    <th>Student</th>
                                    <th>Date</th>


                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>

                                        <td>{{ $project->title }} </td>



                                        <td>{{ $project->student }}</td>
                                        <td>{{ $project->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('download', $project->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-eye"></i>download</a>

                                            <a href="" class="btn btn-danger btn-sm" id="delete"><i
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
