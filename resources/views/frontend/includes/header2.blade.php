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
    <style>
        .logo {
            font-size: 30px;
            font-weight: bold;
        }

        .min-h-screen {
            min-height: auto !important;
            padding: 5em 2em !important;
        }

        .bg-gray-100 {
            background: none !important;
        }

        .menu-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-list a {
            color: black;
            text-decoration: none;
            font-weight: 500;
        }

        .menu-list a:hover {
            color: #3B840C;
        }

        .menu-list a:last-child:hover {
            color: #fff;
        }

        .menu-icon,
        #show-menu {
            display: none;
        }

        @media screen and (max-width: 850px) {
            nav {
                position: fixed;
            }

            .menu-icon {
                display: block;
                font-size: 25px;
                padding: .5em 1em;
            }

            .logo {
                font-size: 25px;
                font-weight: bold;
            }

            .menu-list {
                /* position: fixed; */
                max-height: 0;
                overflow: hidden;
                width: 100%;
                top: 75px;
                text-align: left;
                font-size: 18px;
                font-weight: 500;
                /* left: -100%; */
                transition: .5s ease-out;
                display: block;
                justify-content: start;
                align-items: flex-start;
                padding-left: 10px;
            }

            .menu-list a {
                display: block;
                position: relative;
            }

            .menu-list a:hover::before {
                content: '';
                position: absolute;
                height: 20px;
                width: 20px;
                background-color: #3B840C;
                top: 15px;
                right: 5px;
                transform: rotate(45deg);
            }

            .menu-list a:hover::after {
                content: '';
                position: absolute;
                height: 30px;
                width: 19px;
                background-color: white;
                top: 10px;
                right: 0;
            }

            .menu-list a:hover {
                color: #3B840C;
                background-color: white;
            }

            nav {
                padding: 0;
            }

            nav #show-menu:checked~.menu-icon i::before {
                content: '\f00d';
                color: #3B840C;
            }

            nav #show-menu:checked~.menu-list {
                /* left: 0px; */
                max-height: 50vh;
                overflow: hidden;
                border-top: 1px solid #ddd;
                background-color: white;
            }

            .mb1 {
                margin-top: 20px;
            }

            .mb2 {
                margin-bottom: 20px;
            }

        }
    </style>
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 justify-content-between">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary logo">MOUAU <i class="fa fa-book-open me-3"></i></h2>
        </a>
        <!-- <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                {{-- <a href="{{url('/')}}" class="nav-item nav-link active">Home</a> --}}
                <a href="about.html" class="nav-item nav-link">About</a>

                <a href="contact.html" class="nav-item nav-link">Contact</a>



                @if (Route::has('login'))

                @auth
                    <a href="{{url('logout')}}" class="nav-item nav-link">Logout</a>

                @else
                <a href="{{url('login')}}" class="nav-item nav-link">Login</a>
                @endauth
                @endif
            </div>
            <a href="{{ route('search') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Search Project<i class="fa fa-arrow-right ms-3"></i></a>
        </div> -->

        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fa fa-bars"></i></label>

        <div class="menu-list">
            <a href="{{url('/')}}" class="nav-item nav-link active text-primary mb1">Home</a>
            
            <a href="#" class="nav-item nav-link ">About</a>

            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

            @if (Route::has('login'))

            @auth
            <a href="{{url('logout')}}" class="nav-item nav-link mb2">Logout</a>

            @else
            <a href="{{url('login')}}" class="nav-item nav-link mb2">Login</a>
            @endauth
            @endif

            <a href="{{ route('search') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Search Project<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
