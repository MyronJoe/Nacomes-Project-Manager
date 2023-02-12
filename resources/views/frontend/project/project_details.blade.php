<!-- HEADER INCLUDE -->
@include('frontend.includes.header')




   <!-- Header Start -->
   <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Project</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Project Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->













 <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Project Title</h6>
                <h1 class="mb-4">{{ $project->title }}</h1>
                <h6 class="section-title bg-white text-start text-primary pe-3">Project Description</h6>
                <p class="mb-4">{{ $project->description }}</p>

                <h6 class="section-title bg-white text-start text-primary pe-3">Student Name</h6>
                <p class="mb-4">{{ $project->student }}</p>

                <h6 class="section-title bg-white text-start text-primary pe-3">Project Academic Session</h6>
                <p class="mb-4">{{ $project->year }}</p>


                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('download', $project->id) }}">Download This Project</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

























































<!-- Footer Start -->
@include('frontend.includes.footer')
