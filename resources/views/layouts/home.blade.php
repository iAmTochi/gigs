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
                            <li>
                                <a href="{{ route('jobs.create') }}" class="crs_yuo12 w-auto text-white theme-bg">
                                    <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        <li><a href="javascript:void(0);">Find Job</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="browse-resumes.html">Upload Resumes</a></li>
                                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                            </ul>

                        </li>

                        <li><a href="javascript:void(0);">Employers</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{ route('register.employer') }}">Sign Up</a></li>
                                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                <li><a href="browse-category.html">Browse Categories</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="{{ route('login') }}"  class="ft-medium">
                                <i class="lni lni-user mr-2"></i> Sign In
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="{{ route('jobs.create') }}" >
                                <i class="lni lni-circle-plus mr-1"></i> Post a Job
                            </a>
                        </li>
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

        <!-- ======================= Newsletter Start ============================ -->
        <section class="space bg-cover" style="background:#ff0000 url({{ assert('assets/img/landing-bg.png') }}) no-repeat;">
            <div class="container py-5">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-light mb-0">Subscribe Now</h6>
                            <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
                                        <i class="bnc-ico lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg bg-dark-blue text-light fs-md" type="button">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================= Newsletter Start ============================ -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="light-footer skin-light-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer_widget">
                                <img src="assets/img/logo.png" class="img-footer small mb-2" alt="" />

                                <div class="address mt-2">

                                    Block 26, Plot 12, Admiralty Way, <br>Lekki Phase 1, Lagos, Nigeria

                                </div>
                                <div class="address mt-3">
                                    07039292227<br>
                                    07049214930<br>
                                    08116047012<br>
                                    <br>

                                    support@gsrajobs.com<br>
                                    gsrarecruit@gmail.com<br>
                                    jobsglobalrecruitment21@gmail.com
                                </div>
                                <div class="address mt-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">For Employers</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Explore Candidates</a></li>
                                    <li><a href="#">Submit Job</a></li>
                                    <li><a href="#">Shortlisted</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">For Candidates</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Explore All Jobs</a></li>
                                    <li><a href="#">Browse Categories</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">About Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Who We're?</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="#">Our team</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Helpful Topics</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom br-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© {{ date('Y') }} Global Skill Recruitment Agency Limited. <!-- Designd By <a href="https://themezhub.com/">ThemezHub</a>.--> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->



        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

@include('partial._foot')



