<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Dynaton Digital Solutions" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'You are Good') }} - Global Skill and Recruitment Agency</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <style>
        .theme-bg-light {
            background: rgb(41 40 182 / 11%) !important;
            background-image: initial !important;
            background-position-x: initial !important;
            background-position-y: initial !important;
            background-size: initial !important;
            background-repeat-x: initial !important;
            background-repeat-y: initial !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: rgba(41, 40, 182, 0.11) !important;
        }
        .dashboard-nav ul li.active, .dashboard-nav ul li:hover {
            border-color: #0001A2;
            background-color: rgba(41, 40, 182,0.1);
        }

        .theme-bg {
            background: #ff0000 !important;
        }
        .slick-next:before, .slick-prev:before {
            color: #ff0000 ;
        }

        .jbs {
            display: flex;
            width: 100%;
            background-size: cover !important;
            background-position: center !important;
        }

        @media only screen and (max-width: 991px) {

            .jbs {
                height: 200px;
                /*width: 100%;*/
            }

            .employer {


                display: flex;
                flex-flow: column-reverse;

            }
        }
    </style>
    @yield('styles')

</head>

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
                                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                <li><a href="browse-category.html">Browse Categories</a></li>

                            </ul>

                        </li>

                        <li><a href="javascript:void(0);">Employers</a>
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
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ======================= Home Banner ======================== -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-5.jpg') }}) no-repeat;" data-overlay="3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-right mb-5">
                                    <h1 class="banner_title ft-bold mb-1 uppercase"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>

                                <div class="text-right align-items-center justify-content-center mt-5">
                                    <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i
                                                class="lni lni-user mr-1"></i>I'm looking for a Job</a>
                                    <a href="javascript:void(0);"
                                       class="btn bg-dark hover-theme text-light ft-regular ml-1"><i
                                                class="lni lni-briefcase mr-1"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-6.png') }}) no-repeat;" data-overlay="3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-left mb-5">
                                    <h1 class="banner_title ft-bold mb-1 uppercase"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>

                                {{--                                <form class="bg-white rounded p-1">--}}
                                {{--                                    <div class="row no-gutters">--}}
                                {{--                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">--}}
                                {{--                                            <div class="form-group mb-0 position-relative">--}}
                                {{--                                                <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />--}}
                                {{--                                                <i class="bnc-ico lni lni-search-alt"></i>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">--}}
                                {{--                                            <div class="form-group mb-0 position-relative">--}}
                                {{--                                                <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />--}}
                                {{--                                                <i class="bnc-ico lni lni-target"></i>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">--}}
                                {{--                                            <div class="form-group mb-0 position-relative">--}}
                                {{--                                                <select class="custom-select lg b-0">--}}
                                {{--                                                    <option value="1">Choose Categories</option>--}}
                                {{--                                                    <option value="2">Information Technology</option>--}}
                                {{--                                                    <option value="3">Cloud Computing</option>--}}
                                {{--                                                    <option value="4">Engineering Services</option>--}}
                                {{--                                                    <option value="5">Healthcare/Pharma</option>--}}
                                {{--                                                    <option value="6">Telecom/ Internet</option>--}}
                                {{--                                                    <option value="7">Finance/Insurance</option>--}}
                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">--}}
                                {{--                                            <div class="form-group mb-0 position-relative">--}}
                                {{--                                                <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}

                                {{--                                    </div>--}}
                                {{--                                </form>--}}

                                <div class="text-left align-items-center justify-content-center mt-5">
                                    <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i
                                                class="lni lni-user mr-1"></i>I'm looking for a Job</a>
                                    <a href="javascript:void(0);"
                                       class="btn bg-dark hover-theme text-light ft-regular ml-1"><i
                                                class="lni lni-briefcase mr-1"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-2.jpg') }}) no-repeat;" data-overlay="3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-center mb-5">
                                    <h1 class="banner_title ft-bold mb-1 uppercase"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>


                                <div class="text-center align-items-center justify-content-center mt-5">
                                    <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i
                                                class="lni lni-user mr-1"></i>I'm looking for a Job</a>
                                    <a href="javascript:void(0);"
                                       class="btn bg-dark hover-theme text-light ft-regular ml-1"><i
                                                class="lni lni-briefcase mr-1"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ======================= Home Banner ======================== -->

    <section class="space py-0" style="background: #ff0000;">
        <!-- ======================= for job seekers Start ============================ -->
        <div class="text-white ">


            <div class="row">
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/banner-5.jpg') }}); z-index: 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="position-relative py-5 my-4 px-4">

                        <h2 class="ft-bold mb-3 text-white text-center">FOR JOB SEEKERS</h2>
                        <p class="mb-2" style="font-size: 18px !important;"> Global Skills Recruitment Agency, GSRA, is
                            a recruiting,
                            training and staffing agency. Our number one goal is to significantly
                            reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                            we dedicate a lot of time to training and re-training candidates to be employable and
                            fitted for the right job. We hire for fit by connecting
                            qualified employees to their respective employers.
                        </p>
                        <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                            <a href="http://127.0.0.1:8000/about-us" class="btn gray ft-medium apply-btn fs-sm rounded">See
                                Details<i class="lni lni-arrow-right-circle ml-2"></i></a>
                        </div>
                    </div>

                </div>


            </div>


        </div>
        <!-- ======================= for job seekers Start ============================ -->
        <!-- ======================= for job Employers Start ============================ -->
        <div class="text-white ">


            <div class="row employer">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced pl-2">
                        <div class="position-relative py-5 my-4 px-4">

                            <h2 class="ft-bold mb-3 text-white text-center">FOR EMPLOYERS</h2>
                            <p class="mb-2" style="font-size: 18px !important;"> Global Skills Recruitment Agency, GSRA,
                                is a recruiting,
                                training and staffing agency. Our number one goal is to significantly
                                reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                                we dedicate a lot of time to training and re-training candidates to be employable and
                                fitted for the right job. We hire for fit by connecting
                                qualified employees to their respective employers.
                            </p>
                            <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                                <a href="http://127.0.0.1:8000/about-us"
                                   class="btn gray ft-medium apply-btn fs-sm rounded">See Details<i
                                            class="lni lni-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/banner-5.jpg') }}); z-index: 1">

                </div>


            </div>


        </div>
        <!-- ======================= for job Employers Start ============================ -->
    </section>

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About Us</span>
                            </div>
                            <h2 class="ft-bold mb-3">We Recruit and Train <br> Staffs For You</h2>
                            <p class="mb-2"> Global Skills Recruitment Agency, GSRA, is a recruiting,
                                training and staffing agency. Our number one goal is to significantly
                                reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                                we dedicate a lot of time to training and re-training candidates to be employable and
                                fitted for the right job. We hire for fit by connecting
                                qualified employees to their respective employers.
                            </p>
                            <p class="mb-4">At GSRA, we are focused on making candidates
                                highly productive at the workplace. To do that, we undertake a lot of training
                                on behalf of our clients and the candidates themselves to ensure that they are equipped
                                with the requisite knowledge and skills to perform their responsibilities effectively.
                                We are a one-stop shop for the basic recruitment needs of both employers and
                                job seekers and have inculcated SKILLS ACQUISITION as a fundamental aspect of GSRA to
                                help prepare our
                                candidates to be successful in their next job.
                            </p>
                        </div>
                        <div class="position-relative row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <h3 class="ft-bold theme-cl mb-0">10k+</h3>
                                <p class="ft-medium">Active Jobs</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <h3 class="ft-bold theme-cl mb-0">12k+</h3>
                                <p class="ft-medium">Resumes</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <h3 class="ft-bold theme-cl mb-0">07k+</h3>
                                <p class="ft-medium">Employers</p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                <a href="{{ route('about') }}"
                                   class="btn btn-md theme-bg-light rounded theme-cl hover-theme">See Details<i
                                            class="lni lni-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="assets/img/bn-5.png" class="img-fluid" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= About Start ============================ -->

    <!-- ======================= Why Choose GSRA Start ============================ -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-4">
                        <h2 class="ft-bold text-muted">Why Choose GSRA?</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>1</span></div>
                            <div class="blg_desc"><p>We leave no stone unturned in fitting the right employee to the
                                    right employer and
                                    according to the organizational goals of our clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>2</span></div>
                            <div class="blg_desc"><p>We diagnose and offer purpose-built and targeted
                                    solutions to our clients’
                                    peculiar needs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>3</span></div>
                            <div class="blg_desc"><p>We equip employees and job seekers with the appropriate working
                                    skills
                                    needed to function productively in the workplace.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>4</span></div>
                            <div class="blg_desc"><p>We meticulously weave through the thick of applicant
                                    to ensure the right candidate is selected</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Why Choose GSRA ============================ -->

    <!-- ======================= Job List ======================== -->

    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Trending Jobs</h6>
                        <h2 class="ft-bold">All Popular Listed jobs</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-1.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span>
                        </div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-2.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-3.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-4.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-5.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-6.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-7.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span>
                        </div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-8.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX
                                    Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span>
                            </div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->
            <div class="position-relative text-center">
                <a href="job-search-v1.html" class="btn btn-md theme-bg rounded text-light hover-theme">Explore More
                    Jobs<i class="lni lni-arrow-right-circle ml-2"></i></a>
            </div>

        </div>
    </section>
    <!-- ======================= Job List ======================== -->

    <section class="bg-cover" style="background:#ff0000 url({{ asset('assets/img/curve.svg') }})no-repeat">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-light mb-0">Current Openings</h6>
                        <h2 class="ft-bold text-light">We Have Worked with 10,000+ Trusted Companies</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-9.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-4.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-2.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-5.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-10.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-12.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="cats-wrap text-left">
                                <a href="job-search-v1.html"
                                   class="cats-box rounded bg-white d-flex align-items-center px-2 py-3">
                                    <div class="text-center"><img src="assets/img/c-17.png" class="img-fluid" width="55"
                                                                  alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">Web Designing</h4>
                                        <span class="text-muted">302 Jobs</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="ht-50"></div>
    </section>


    <!-- ======================= Customer Review ======================== -->
    <section class="middle gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Our Reviews</h6>
                        <h2 class="ft-bold">What Our Customers <span class="text-danger"> Are Saying</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="review-slide px-3">

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-3.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Alvin B. Washington</h4>
                                        <p class="p-0 m-0">Co Founder</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb"><img src="assets/img/team-4.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Lavera C. Clifford</h4>
                                        <p class="p-0 m-0">Team Manager</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Linda S. Riggs</h4>
                                        <p class="p-0 m-0">Project Manager</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb"><img src="assets/img/team-5.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Chris L. Hazel</h4>
                                        <p class="p-0 m-0">Web Designer</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-1.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Mark Jukerberg</h4>
                                        <p class="p-0 m-0">PHP Developer</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Customer Review ======================== -->


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


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


</body>

</html>


