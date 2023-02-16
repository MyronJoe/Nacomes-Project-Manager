






<div class="container-xxl py-5" id="#search">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Search</h6>
            <h1 class="mb-5">Search For Projects</h1>
        </div>
        <div class="g-4">

            <form method="POST" action="{{ route('search-p') }}">
                @csrf
                <div class="row g-3">

                    <div class="col-12">
                        <div class="search">
                            <input type="text" class="form-control" onfocus="search_result_show()" onblur="search_result_" id="search" name="search" placeholder="Search project here..." required >


                        </div>
                    </div>

                </div>
            </form>

        </div>

<div class="row">
    <div class="col-md-12" id="searchproject">
        <div ></div>
    </div>
</div>

    </div>
</div>

<br>
