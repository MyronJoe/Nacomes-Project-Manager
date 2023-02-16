@extends('backend.backend_master')
@section('content')







    <!-- BEGIN: Content-->

            <section class="app-user-view-account">
    <div class="row">
      <!-- User Sidebar -->
      <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
        <!-- User Card -->
        <div class="card">
          <div class="card-body">
            <div class="user-avatar-section">
              <div class="d-flex align-items-center flex-column">

                <img
                  class="img-fluid rounded mt-3 mb-2"
                  src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                  height="110"
                  width="110"
                  alt="User avatar"
                />
                <div class="user-info text-center">
                  <h4>{{ $admin->name }}</h4>
                  <span class="badge bg-light-secondary">{{ $admin->email }}</span>
<hr>
                  <p>Two Factor Authentication</p>

                  <form action="/user/two-factor-authentication" class="form" method="POST">
                    @csrf
                    @if (Auth::user()->two_factor_secret)
                      @method('DELETE')
                    <button class="btn btn-danger">Disable</button>
                        <div class="py-2">
                            <small>scan the qr code below</small> <br>
                            {!! Auth::user()->twoFactorQrCodeSvg() !!}
                        </div>
                    @else

                    <button class="btn btn-success">Enable</button>

                    @endif

                    <br> <br>

                    @if (session('status'))
                     <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                     </div>


                @endif

                </form>
                </div>
              </div>
            </div>



          </div>
        </div>
        <!-- /User Card -->

      </div>
      <!--/ User Sidebar -->

      <!-- User Content -->
      <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">


        <!-- Project table -->
        <div class="card">
          <h4 class="card-header">Update Profile</h4>
          <div class="card-body">
            <form class="form" action="{{ route('admin-update-profile', $admin->id) }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="mb-2">
                        <label class="form-label mb-1">Name</label>
                        <input type="text" id="" class="form-control" value="{{ $admin->name }}" name="name" required />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="mb-2">
                          <label class="form-label mb-1">Email</label>
                          <input type="email" id="" class="form-control" value="{{ $admin->email }}"  name="email" required />
                          @error('email')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                </div>

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Update Profile">
                </div>

            </form>
          </div>
        </div>
        <!-- /Project table -->


         <!-- Project table -->
         <div class="card">
            <h4 class="card-header">Update Password</h4>
            <div class="card-body">
                <form class="form" action="{{ route('admin-update-password', $admin->id) }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 col-12">
                          <div class="mb-2">
                            <label class="form-label mb-1">Current Password</label>
                            <input type="password" id="" class="form-control" placeholder="type.." name="current_password" required />
                            @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="mb-2">
                              <label class="form-label mb-1">New Password</label>
                              <input type="password" id="" class="form-control" placeholder="type.." name="password" required />
                              @error('password')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                          <div class="col-md-12 col-12">
                            <div class="mb-2">
                              <label class="form-label mb-1">Confirm Password</label>
                              <input type="password" id="" class="form-control" placeholder="type.." name="password_confirmation" required />
                              @error('password_confirmation')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-danger" value="Change Password">
                    </div>

                </form>
              </div>
          </div>
          <!-- /Project table -->


      </div>
      <!--/ User Content -->
    </div>
  </section>




















@endsection
