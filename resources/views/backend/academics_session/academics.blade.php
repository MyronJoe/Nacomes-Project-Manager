@extends('backend.backend_master')
@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <a href=""></a>
            <a href="{{ route('add_session') }}" class="btn btn-primary  py-1 mb-2" style="float: right"> Add Project Session
            </a>
        </div> <br>
        <div class="col-md-12 ">
            <div class="card">
            <!-- @include('backend.include.successmsg') -->
                <div class="card-header with-border">
                    <h3 class="card-title ">Academic Sessions</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S|N</th>
                                    <th>Accademic Session</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$data->session}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('edit_session', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>Edit</a>
                                                <span class="m-1 d-block"></span>
                                            <a href="{{route('delete_session', $data->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-eye"></i>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection