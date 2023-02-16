@php
    $projects = App\Models\Backend\Project::latest()->paginate(8);
@endphp



<div class="container-xxl py-5" id="project">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Projects</h6>
                <h1 class="mb-5">Latest Projects</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($projects as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('project-details', $item->id) }}">
                    <div class="course-item bg-light">
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-2">{{ Str::limit($item->title, 20, '...') }}</h3>

                            <h6 class="mb-4">{{ Str::limit($item->description, 20, '...') }}</h6>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ Str::limit($item->student, 6, '...') }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $item->year }}</small>
                        </div>
                    </div>
                </a>
                </div>


                @endforeach

            </div>
        </div>
    </div>
