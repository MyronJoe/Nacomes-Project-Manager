
@php
 $admin = Auth::user()->user_type;

@endphp



<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href=""><span class="brand-logo">
                    </span>

                    <h2 class="brand-text">Mouau</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('home') }}"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboard</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a></li>


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Pages</span><i
                    data-feather="more-horizontal"></i></li>


    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin-view-project') }}"><i
                        data-feather="book"></i><span class="menu-title text-truncate"
                        data-i18n="book">Projects</span></a></li>





            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin-academics') }}"><i
                        data-feather="check-square"></i><span class="menu-title text-truncate"
                        data-i18n="Todo">Academic Session</span></a></li>



<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('manage_users') }}"><i
                        data-feather="users"></i><span class="menu-title text-truncate"
                        data-i18n="users">Admins</span></a></li>

<!-- @if($admin != 2)

@else

<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('manage_users') }}"><i
                        data-feather="users"></i><span class="menu-title text-truncate"
                        data-i18n="users">Admins</span></a></li>


@endif -->


            <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin-profile') }}"><i
                        data-feather="grid"></i><span class="menu-title text-truncate"
                        data-i18n="Kanban">Settings</span></a></li> -->



                        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin-profile') }}"><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="user">Profile</span></a></li>



        </ul>
    </div>
</div>
