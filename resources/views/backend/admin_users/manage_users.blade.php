@extends('backend.backend_master')
@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <a href=""></a>
            <a href="{{ route('add_admin') }}" class="btn btn-primary  py-1 mb-2" style="float: right">Add Admin User
            </a>
        </div> <br>
        <div class="col-md-12 ">
            <div class="card">
            <!-- @include('backend.include.successmsg') -->
                <div class="card-header with-border">
                    <h3 class="card-title ">Admin Users</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>S|N</th> -->
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($super_admin as $key => $user)
                                    <tr>
                                        <!-- <td>{{$key + 1}}</td> -->
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>

                                        @if($user->user_type == 2)
                                            <td><a href="" id="confirm" style="color: red; font-weight:bold">Super Admin</a></td>
                                        @else
                                            <td><a href="" id="confirm" style="color: white; font-weight:bold">Admin</a></td>
                                        @endif

                                        <td class="d-flex">
                                            <a href="{{route('edit_user', $user->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>Edit</a>
                                                <span class="m-1 d-block"></span>
                                            <a href="{{route('delete_user', $user->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-eye"></i>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($admin_users as $key => $user)
                                    <tr>
                                        <!-- <td>{{$key + 1}}</td> -->
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                    
                                        @if($user->user_type == 2)
                                            <td><a href="" id="confirm" style="color: red; font-weight:bold">Super Admin</a></td>
                                        @else
                                            <td><a href="" id="confirm" style="color: white; font-weight:bold">Admin</a></td>
                                        @endif

                                        <td class="d-flex">
                                            <a href="{{route('edit_user', $user->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>Edit</a>
                                                <span class="m-1 d-block"></span>
                                            <a href="{{route('delete_user', $user->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-eye"></i>Delete</a>
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