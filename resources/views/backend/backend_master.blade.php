@include('backend.include.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('backend.include.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
   <!-- BEGIN: Content-->
   <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>





  <div class="content-body"><!-- Dashboard Ecommerce Starts -->

      @yield('content')

      </div>
    </div>
  </div>
  <!-- END: Content-->

  <!-- Footer -->

  @include('backend.include.footer')
