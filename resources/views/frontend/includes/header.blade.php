<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mouau Computer Engineering Project Bank</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="frontend/img/favicon.ico" rel="icon">




    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="frontend/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">MOUAU <i class="fa fa-book-open me-3"></i></h2>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                
                <a href="#" class="nav-item nav-link">About</a>

                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                @if (Route::has('login'))

                @auth
                    <a href="{{url('logout')}}" class="nav-item nav-link">Logout</a>

                @else
                <a href="{{url('login')}}" class="nav-item nav-link">Login</a>
                @endauth
                @endif
            </div>
            <a href="{{ route('search') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Search Project<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
