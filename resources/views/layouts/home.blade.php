@include('partial._head')

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header  header-transparent change-logo">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}"  class="theme-cl fs-lg">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{ route('jobs.create') }}" class="crs_yuo12 w-auto text-white theme-bg">--}}
{{--                                    <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        <li><a href="javascript:void(0);">Find Job</a>
                            <ul class="nav-dropdown nav-submenu">
{{--                                <li><a href="browse-resumes.html">Upload Resumes</a></li>--}}
{{--                                <li><a href="browse-jobs.html">Browse Jobs</a></li>--}}
                            </ul>

                        </li>

                        <li><a href="javascript:void(0);">Employers</a>
                            <ul class="nav-dropdown nav-submenu">
{{--                                <li><a href="{{ route('register.employer') }}">Sign Up</a></li>--}}
                                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                <li><a href="browse-category.html">Browse Categories</a></li>

                            </ul>
                        </li>
{{--                        <li><a href="{{ route('about') }}">About</a></li>--}}
{{--                        <li><a href="{{ route('contact') }}">Contact</a></li>--}}
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="{{ route('login') }}"  class="ft-medium">
                                <i class="lni lni-user mr-2"></i> Sign In
                            </a>
                        </li>
{{--                        <li class="add-listing theme-bg">--}}
{{--                            <a href="{{ route('jobs.create') }}" >--}}
{{--                                <i class="lni lni-circle-plus mr-1"></i> Post a Job--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>


        @if($pageTitle??Null)
            <!-- ======================= Top Breadcrubms ======================== -->
            <div class="gray py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======================= Top Breadcrubms ======================== -->
        @endif



            @yield('content')

               <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

@include('partial._foot')



