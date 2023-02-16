@extends('backend.backend_master')
@section('content')



<!-- list and filter end -->
</section>
<!-- users list ends -->


<div class="row">
  <br>
  <div class="col-md-12 ">

    <div class="card">

      <div class="card-header with-border">
        <h3 class="card-title ">Manage Projects</h3>
      </div>

      <!-- /.box-header -->
      <div class="card-body">


        <form class="form" action="{{ route('store-project') }}" method="POST" enctype="multipart/form-data" novalidate>
          @csrf

          <div class="row">
            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project Title</label>
                <input type="text" id="" class="form-control" placeholder="Title" name="title" required />
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-12 col-12">
              <div class="mb-2">
                <div class="form-group mb-1">
                  <label class="mb-1">Project Year</label>
                  <select name="year" class="select2 form-select" id="select2-basic" required>
                    <option value="">Select Project Year</option>
                    @foreach($datas as $key => $data)
                    <option value="{{$data->session}}">{{$data->session}}</option>
                    @endforeach
                  </select>
                  @error('year')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

              </div>
            </div>

            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Student Name</label>
                <input type="text" id="" class="form-control" placeholder="Student" name="student" required />
                @error('student')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>


            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project Description</label>
                <textarea name="description" id="editor" cols="10" rows="3" class="form-control" required></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project File (.pdf only)</label>
                <input type="file" class="form-control" placeholder="Year" name="project_file" required />
                @error('project_file')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>



            <div class="card-footer">
              <button type="submit" class="btn btn-primary me-1">Submit Project</button>
              <button type="reset" class="btn btn-outline-danger">Reset Form</button>



            </div>
          </div>
        </form>


      </div>
      <!-- /.box-body -->

    </div>

    <!-- /.box -->
  </div>

</div>


</div>

</div>
</div>
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
