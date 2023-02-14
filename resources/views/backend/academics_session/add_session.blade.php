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
                    <form class="form" action="{{ route('save_session') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <!-- <label class="form-label mb-1">Academic Session</label> -->
                                    <input type="text" id="" class="form-control" placeholder="Add academic year" name="year" required />
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-1">Add Session</button>
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