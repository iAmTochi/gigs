@extends('layouts.home')

@section('content')


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
                     style="background:#00ab46 url({{ asset('assets/img/banner-9.jpeg') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-left mb-5 typed-out">
                                    <h1 class="banner_title ft-bold mb-1 uppercase"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>

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
            <div class="carousel-item ">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-1.webp') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-right mb-5 typed-out">
                                    <h1 class="banner_title ft-bold mb-1 uppercase "><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium " >...Or seeking for a new job</p>
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
                     style="background:#00ab46 url({{ asset('assets/img/banner-8.webp') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-center mb-5 typed-out">
                                    <h1 class="banner_title ft-bold mb-1  uppercase"><span class="count"></span> In need
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


    <!-- ======================= Job seeks and employers Banner ======================== -->
    <section class="space py-0" style="background: #ff0000;">
        <!-- ======================= for job seekers Start ============================ -->
        <div class="text-white container-fluid">


            <div class="row">
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/applicant.jpeg') }}); z-index: 1" data-overlay="1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="position-relative py-5 px-4">

                        <h2 class="ft-bold mb-3 text-white text-center">FOR JOB SEEKERS</h2>
                        <p class="mb-2" style="font-size: 18px !important;"> Our number one goal is to significantly
                            reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                            we dedicate a lot of time to training and re-training candidates to be employable and
                            fitted for the right job. We are a one-stop shop for the basic recruitment needs of both employers and
                            job seekers and have inculcated SKILLS ACQUISITION as a fundamental aspect of GSRA to
                            help prepare our
                            candidates to be successful in their next job.
                        </p>

                        <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                            <a href="{{ route('about') }}" class="btn gray ft-medium apply-btn fs-sm rounded">See
                                Details<i class="lni lni-arrow-right-circle ml-2"></i></a>
                        </div>
                    </div>

                </div>


            </div>


        </div>
        <!-- ======================= for job seekers Start ============================ -->
        <!-- ======================= for job Employers Start ============================ -->
        <div class="text-white container-fluid">


            <div class="row employer">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                        <div class="position-relative py-5 px-2">

                            <h2 class="ft-bold mb-3 text-white text-center">FOR EMPLOYERS</h2>
                            <p class="mb-2" style="font-size: 18px !important;"> Global Skills Recruitment Agency, GSRA,
                                is a recruiting. We
                                dedicate a lot of time to training and re-training candidates to be employable and
                                fitted for the right job. We hire for fit by connecting
                                qualified employees to their respective employers.

                                At GSRA, we are focused on making candidates
                                highly productive at the workplace. To do that, we undertake a lot of training
                                on behalf of our clients and the candidates themselves to ensure that they are equipped
                                with the requisite knowledge and skills to perform their responsibilities effectively.
                            </p>
                            <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                                <a href="{{ route('about') }}"
                                   class="btn gray ft-medium apply-btn fs-sm rounded">See Details<i
                                            class="lni lni-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                </div>
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/recruiter.webp') }}); z-index: 1" data-overlay="1">

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
                            <h2 class="ft-bold mb-3">We Recruit and Train <br> Staff For You</h2>
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
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="ft-bold theme-cl mb-0">10k+</h3>--}}
{{--                                <p class="ft-medium">Active Jobs</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="ft-bold theme-cl mb-0">12k+</h3>--}}
{{--                                <p class="ft-medium">Resumes</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="ft-bold theme-cl mb-0">07k+</h3>--}}
{{--                                <p class="ft-medium">Employers</p>--}}
{{--                            </div>--}}
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
                        <img src="{{ asset('assets/img/aboutus-01.jpg') }}" class="img-fluid rounded" alt="" width="350" />
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


            </div>
            <!-- row -->
            <div class="position-relative text-center">
                <a href="" class="btn btn-md theme-bg rounded text-light hover-theme">Explore More
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


    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


@endsection

@section('styles')

    <style>

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
                height: 220px;
                /*width: 100%;*/
            }

            .employer {


                display: flex;
                flex-flow: column-reverse;

            }
        }

        .typed-out{
            overflow: hidden;
            /*border-right: .15em solid #0001a2;*/
            white-space: nowrap;
            animation: typing 5.0s  alternate;
            width: 100%;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
    </style>

@endsection
