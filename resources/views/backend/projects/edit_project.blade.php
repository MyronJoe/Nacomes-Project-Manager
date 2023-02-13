@extends('backend.backend_master')
@section('content')







<!-- list and filter end -->
</section>
<!-- users list ends -->

</div>
</div>

<div class="row">
  <br>
  <div class="col-md-12 ">

    <div class="card">

      <div class="card-header with-border">
        <h3 class="card-title ">Update Projects</h3>
      </div>

      <!-- /.box-header -->
      <div class="card-body">


        <form class="form" action="{{ route('update-project', $edit->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="old_file" value="{{ $edit->project_file }}">
          <div class="row">
            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project Title</label>
                <input type="text" value="{{ $edit->title }}" class="form-control" placeholder="Title" name="title" required />
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
                    <option value="{{ $edit->year }}">{{ $edit->year }}</option>
                    @foreach($academics as $key => $data)
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
                <input type="text" value="{{ $edit->student }}" class="form-control" placeholder="Student" name="student" required />
                @error('student')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>


            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project Description</label>
                <textarea name="description" id="editor" cols="10" rows="3" class="form-control" required>{{ $edit->description }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-12 col-12">
              <div class="mb-2">
                <label class="form-label mb-1">Project Old File: </label>
                {{ $edit->project_file }}
                <input type="file" class="form-control" placeholder="Year" name="project_file" />
                @error('project_file')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>



            <div class="card-footer">
              <button type="submit" class="btn btn-info me-1">Update Project</button>




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