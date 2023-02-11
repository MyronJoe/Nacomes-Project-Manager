@extends('backend.backend_master')
@section('content')







            <!-- list and filter end -->
        </section>
        <!-- users list ends -->

    </div>
</div>



















<div class="row">
<div class="col-12">
    <a href="" ></a>


<button type="button" class="btn btn-primary  py-1" style="float: right" data-bs-toggle="modal" data-bs-target="#fullscreenModal"> Upload a Project
  </button>





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
                                <th>Date</th>


                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>

                                <tr>

                                    <td></td>



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



















<div class="fullscreen-modal">
    <!-- upload projectc Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFullTitle">Upload a new project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <hr>








            <section id="multiple-column-form">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title"></h4>
                      </div>
                      <div class="card-body">

                        <form class="form" method="POST" enctype="multipart/form-data">

                          <div class="row">
                            <div class="col-md-12 col-12">
                              <div class="mb-2">
                                <label class="form-label mb-1" >Project Title</label>
           <input type="text" id="" class="form-control" placeholder="Title"
                                  name="title"
                                />
                              </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <div class="form-group mb-1">
                                        <label class="mb-1">Project Year</label>
                                          <select name="year" class="select2 form-select" id="select2-basic" required>
                                            <option value="">Select</option>
                                            <option value="product">Product</option>
                                            <option value="page">Page</option>
                                          </select>
                                      </div>

                                </div>
                              </div>

                              <div class="col-md-12 col-12">
                                <div class="mb-2">
                                  <label class="form-label mb-1" >Student Name</label>
             <input type="text" id="" class="form-control" placeholder="Student"
                                    name="student"
                                  />
                                </div>
                              </div>


                              <div class="col-md-12 col-12">
                                <div class="mb-2">
                                  <label class="form-label mb-1" >Project Description</label>
             <textarea name="description" id="editor" cols="10" rows="3" class="form-control"></textarea>
                                </div>
                              </div>

                              <div class="col-md-12 col-12">
                                <div class="mb-2">
                                  <label class="form-label mb-1" >Project File</label>
             <input type="file"  class="form-control" placeholder="Year"
                                    name="project_file"
                                  />
                                </div>
                              </div>



                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary me-1">Submit Project</button>
                              <button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>


                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Basic Floating Label Form section end -->



















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
