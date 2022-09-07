@extends('layouts.home')

@section('content')


    <!-- ======================= Home Banner ======================== -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="home-banner margin-bottom-0" style="background:#00ab46 url({{ asset('assets/img/banner-2.jpg') }}) no-repeat;" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-center mb-5">
                                    <h1 class="banner_title ft-bold mb-1"><span class="count">127</span> jobs Listed Here!</h1>
                                    <p class="fs-md ft-medium">Your Dream Jobs is Waiting</p>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-banner margin-bottom-0" style="background:#00ab46 url({{ asset('assets/img/banner-3.jpg') }}) no-repeat;" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-center mb-5">
                                    <h1 class="banner_title ft-bold mb-1"><span class="count">127</span> jobs Listed Here!</h1>
                                    <p class="fs-md ft-medium">Your Dream Jobs is Waiting</p>
                                </div>

                                <form class="bg-white rounded p-1">
                                    <div class="row no-gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
                                                <i class="bnc-ico lni lni-search-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
                                                <i class="bnc-ico lni lni-target"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <select class="custom-select lg b-0">
                                                    <option value="1">Choose Categories</option>
                                                    <option value="2">Information Technology</option>
                                                    <option value="3">Cloud Computing</option>
                                                    <option value="4">Engineering Services</option>
                                                    <option value="5">Healthcare/Pharma</option>
                                                    <option value="6">Telecom/ Internet</option>
                                                    <option value="7">Finance/Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <div class="text-center align-items-center justify-content-center mt-5">
                                    <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i class="lni lni-user mr-1"></i>Create Account</a>
                                    <a href="javascript:void(0);" class="btn bg-dark hover-theme text-light ft-regular ml-1"><i class="lni lni-upload mr-1"></i>Upload Resume</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-banner margin-bottom-0" style="background:#00ab46 url({{ asset('assets/img/banner-4.jpg') }}) no-repeat;" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="banner_caption text-center mb-5">
                                    <h1 class="banner_title ft-bold mb-1"><span class="count">127</span> jobs Listed Here!</h1>
                                    <p class="fs-md ft-medium">Your Dream Jobs is Waiting</p>
                                </div>

                                <form class="bg-white rounded p-1">
                                    <div class="row no-gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
                                                <i class="bnc-ico lni lni-search-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
                                                <i class="bnc-ico lni lni-target"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <select class="custom-select lg b-0">
                                                    <option value="1">Choose Categories</option>
                                                    <option value="2">Information Technology</option>
                                                    <option value="3">Cloud Computing</option>
                                                    <option value="4">Engineering Services</option>
                                                    <option value="5">Healthcare/Pharma</option>
                                                    <option value="6">Telecom/ Internet</option>
                                                    <option value="7">Finance/Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                            <div class="form-group mb-0 position-relative">
                                                <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <div class="text-center align-items-center justify-content-center mt-5">
                                    <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i class="lni lni-user mr-1"></i>Create Account</a>
                                    <a href="javascript:void(0);" class="btn bg-dark hover-theme text-light ft-regular ml-1"><i class="lni lni-upload mr-1"></i>Upload Resume</a>
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
    <div class="home-banner margin-bottom-0" style="background:#00ab46 url({{ asset('assets/img/banner-2.jpg') }}) no-repeat;" data-overlay="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="banner_caption text-center mb-5">
                        <h1 class="banner_title ft-bold mb-1"><span class="count">127</span> jobs Listed Here!</h1>
                        <p class="fs-md ft-medium">Your Dream Jobs is Waiting</p>
                    </div>

                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
                                    <i class="bnc-ico lni lni-search-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
                                    <i class="bnc-ico lni lni-target"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <select class="custom-select lg b-0">
                                        <option value="1">Choose Categories</option>
                                        <option value="2">Information Technology</option>
                                        <option value="3">Cloud Computing</option>
                                        <option value="4">Engineering Services</option>
                                        <option value="5">Healthcare/Pharma</option>
                                        <option value="6">Telecom/ Internet</option>
                                        <option value="7">Finance/Insurance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>
                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="text-center align-items-center justify-content-center mt-5">
                        <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i class="lni lni-user mr-1"></i>Create Account</a>
                        <a href="javascript:void(0);" class="btn bg-dark hover-theme text-light ft-regular ml-1"><i class="lni lni-upload mr-1"></i>Upload Resume</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Home Banner ======================== -->

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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-1.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-2.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-3.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-4.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-5.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-6.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-7.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
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
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-8.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="position-relative text-center">
                        <a href="job-search-v1.html" class="btn btn-md theme-bg-light rounded theme-cl hover-theme">Explore More Jobs<i class="lni lni-arrow-right-circle ml-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Job List ======================== -->

    <!-- ======================= All category ======================== -->
    <section class="space gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Popular Categories</h6>
                        <h2 class="ft-bold">Browse Top Categories</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-laptop-phone fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Software Company</h4>
                                <span class="text-muted">607 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-cloud fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Cloud Computing</h4>
                                <span class="text-muted">960 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-shopify fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Logistics/Shipping</h4>
                                <span class="text-muted">438 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-construction fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Engineering Services</h4>
                                <span class="text-muted">644 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-phone-set fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Telecom/ Internet</h4>
                                <span class="text-muted">380 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-sthethoscope fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Healthcare/Pharma</h4>
                                <span class="text-muted">472 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-money-protection fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Finance/Insurance</h4>
                                <span class="text-muted">654 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-diamond fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Product Software</h4>
                                <span class="text-muted">732 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-briefcase fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Diversified/Retail</h4>
                                <span class="text-muted">610 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-graduation fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Education</h4>
                                <span class="text-muted">960 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-mastercard fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Banking/BPO</h4>
                                <span class="text-muted">740 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-gallery fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">Printing & Packaging</h4>
                                <span class="text-muted">425 Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /row -->

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="position-relative text-center">
                        <a href="browse-category.html" class="btn btn-md bg-dark rounded text-light hover-theme">Browse All Categories<i class="lni lni-arrow-right-circle ml-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= All category ======================== -->

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About Us</span></div>
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
                                <a href="{{ route('about') }}" class="btn btn-md theme-bg-light rounded theme-cl hover-theme">See Details<i class="lni lni-arrow-right-circle ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="assets/img/bn-5.png" class="img-fluid" alt="" />
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
{{--                            <h6 class="text-muted mb-0">Why Choose GSRA? </h6>--}}
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
{{--                                <div class="blg_title"><h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>--}}
                                <div class="blg_desc"><p>We leave no stone unturned in fitting the right employee to the right employer and
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
{{--                                <div class="blg_title"><h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>--}}
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
{{--                                <div class="blg_title"><h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>--}}
                                <div class="blg_desc"><p>We equip employees and job seekers with the appropriate working skills
                                        needed to function productively in the workplace.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- Single Item -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>4</span></div>
{{--                                <div class="blg_title"><h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>--}}
                                <div class="blg_desc"><p>We meticulously weave through the thick of applicant
                                        to ensure the right candidate is selected</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= Blog Start ============================ -->

    <!-- ======================= Our Partner Start ============================ -->
    <section class="p-0 mt-4">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Our Partners</h6>
                        <h2 class="ft-bold">We Have Worked with <span class="theme-cl">100+</span> Trusted Companies</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-1.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-2.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-3.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-4.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-5.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-6.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-7.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-8.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-9.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="empl-thumb text-center px-3 py-4">
                        <img src="assets/img/l-10.png" class="img-fluid mx-auto" alt="" />
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Our Partner Start ============================ -->

{{--    <!-- ============================ Pricing Start ==================================== -->--}}
{{--    <section class="space min">--}}
{{--        <div class="container">--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">--}}
{{--                    <div class="sec_title position-relative text-center mb-5">--}}
{{--                        <h6 class="text-muted mb-0">Our Pricing</h6>--}}
{{--                        <h2 class="ft-bold">Choose Your Package</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row align-items-center">--}}

{{--                <!-- Single Package -->--}}
{{--                <div class="col-lg-4 col-md-4">--}}
{{--                    <div class="pricing_wrap">--}}
{{--                        <div class="prt_head">--}}
{{--                            <h4 class="ft-medium">Basic</h4>--}}
{{--                        </div>--}}
{{--                        <div class="prt_price">--}}
{{--                            <h2 class="ft-bold"><span>$</span>29</h2>--}}
{{--                            <span class="fs-md">per user, per month</span>--}}
{{--                        </div>--}}
{{--                        <div class="prt_body">--}}
{{--                            <ul>--}}
{{--                                <li>99.5% Uptime Guarantee</li>--}}
{{--                                <li>120GB CDN Bandwidth</li>--}}
{{--                                <li>5GB Cloud Storage</li>--}}
{{--                                <li class="none">Personal Help Support</li>--}}
{{--                                <li class="none">Enterprise SLA</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="prt_footer">--}}
{{--                            <a href="#" class="btn choose_package">Start Basic</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Package -->--}}
{{--                <div class="col-lg-4 col-md-4">--}}
{{--                    <div class="pricing_wrap">--}}
{{--                        <div class="prt_head">--}}
{{--                            <div class="recommended">Best Value</div>--}}
{{--                            <h4 class="ft-medium">Standard</h4>--}}
{{--                        </div>--}}
{{--                        <div class="prt_price">--}}
{{--                            <h2 class="ft-bold"><span>$</span>49</h2>--}}
{{--                            <span class="fs-md">per user, per month</span>--}}
{{--                        </div>--}}
{{--                        <div class="prt_body">--}}
{{--                            <ul>--}}
{{--                                <li>99.5% Uptime Guarantee</li>--}}
{{--                                <li>150GB CDN Bandwidth</li>--}}
{{--                                <li>10GB Cloud Storage</li>--}}
{{--                                <li>Personal Help Support</li>--}}
{{--                                <li class="none">Enterprise SLA</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="prt_footer">--}}
{{--                            <a href="#" class="btn choose_package active">Start Standard</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Package -->--}}
{{--                <div class="col-lg-4 col-md-4">--}}
{{--                    <div class="pricing_wrap">--}}
{{--                        <div class="prt_head">--}}
{{--                            <h4 class="ft-medium">Platinum</h4>--}}
{{--                        </div>--}}
{{--                        <div class="prt_price">--}}
{{--                            <h2 class="ft-bold"><span>$</span>79</h2>--}}
{{--                            <span class="fs-md">2 user, per month</span>--}}
{{--                        </div>--}}
{{--                        <div class="prt_body">--}}
{{--                            <ul>--}}
{{--                                <li>100% Uptime Guarantee</li>--}}
{{--                                <li>200GB CDN Bandwidth</li>--}}
{{--                                <li>20GB Cloud Storage</li>--}}
{{--                                <li>Personal Help Support</li>--}}
{{--                                <li>Enterprise SLA</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="prt_footer">--}}
{{--                            <a href="#" class="btn choose_package">Start Platinum</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- ============================ Pricing End ==================================== -->--}}

{{--    <!-- ======================= Blog Start ============================ -->--}}
{{--    <section class="space min gray">--}}
{{--        <div class="container">--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="sec_title position-relative text-center mb-4">--}}
{{--                        <h6 class="text-muted mb-0">Latest News</h6>--}}
{{--                        <h2 class="ft-bold">Pickup New Updates</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row justify-content-center">--}}

{{--                <!-- Single Item -->--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="blg_grid_box">--}}
{{--                        <div class="blg_grid_thumb">--}}
{{--                            <a href="blog-detail.html"><img src="assets/img/b-4.jpg" class="img-fluid" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="blg_grid_caption">--}}
{{--                            <div class="blg_tag"><span>Marketing</span></div>--}}
{{--                            <div class="blg_title"><h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by Step?</a></h4></div>--}}
{{--                            <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>--}}
{{--                        </div>--}}
{{--                        <div class="crs_grid_foot">--}}
{{--                            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">--}}
{{--                                <div class="crs_fl_first">--}}
{{--                                    <div class="crs_tutor">--}}
{{--                                        <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="35" alt=""></a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_fl_last">--}}
{{--                                    <div class="foot_list_info">--}}
{{--                                        <ul>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Item -->--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="blg_grid_box">--}}
{{--                        <div class="blg_grid_thumb">--}}
{{--                            <a href="blog-detail.html"><img src="assets/img/b-5.jpg" class="img-fluid" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="blg_grid_caption">--}}
{{--                            <div class="blg_tag"><span>Business</span></div>--}}
{{--                            <div class="blg_title"><h4><a href="blog-detail.html">Let's Know How Skillup Work Fast and Secure?</a></h4></div>--}}
{{--                            <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>--}}
{{--                        </div>--}}
{{--                        <div class="crs_grid_foot">--}}
{{--                            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">--}}
{{--                                <div class="crs_fl_first">--}}
{{--                                    <div class="crs_tutor">--}}
{{--                                        <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-3.jpg" class="img-fluid circle" width="35" alt=""></a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_fl_last">--}}
{{--                                    <div class="foot_list_info">--}}
{{--                                        <ul>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Item -->--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="blg_grid_box">--}}
{{--                        <div class="blg_grid_thumb">--}}
{{--                            <a href="blog-detail.html"><img src="assets/img/b-6.jpg" class="img-fluid" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="blg_grid_caption">--}}
{{--                            <div class="blg_tag"><span>Accounting</span></div>--}}
{{--                            <div class="blg_title"><h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a></h4></div>--}}
{{--                            <div class="blg_desc"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p></div>--}}
{{--                        </div>--}}
{{--                        <div class="crs_grid_foot">--}}
{{--                            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">--}}
{{--                                <div class="crs_fl_first">--}}
{{--                                    <div class="crs_tutor">--}}
{{--                                        <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" width="35" alt=""></a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_fl_last">--}}
{{--                                    <div class="foot_list_info">--}}
{{--                                        <ul>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">10k Views</div></li>--}}
{{--                                            <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">10 July 2021</div></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- ======================= Blog Start ============================ -->--}}

{{--    <!-- ========================== Download App Section =============================== -->--}}
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}

{{--                <div class="col-lg-6 col-md-12 col-sm-12 content-column">--}}
{{--                    <div class="content_block_2 pr-3 py-4">--}}
{{--                        <div class="content-box">--}}
{{--                            <div class="sec-title light">--}}
{{--                                <p class="theme-cl px-3 py-1 rounded bg-light-success d-inline-flex">Download apps</p>--}}
{{--                                <h2 class="ft-bold">Get the Workplex Job<br>Search App</h2>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto accusantium.</p>--}}
{{--                            </div>--}}
{{--                            <div class="btn-box clearfix mt-5">--}}
{{--                                <a href="index.html" class="download-btn play-store mb-1 d-inline-flex"><img src="assets/img/ios.png" width="200" alt="" /></a>--}}
{{--                                <a href="index.html" class="download-btn play-store ml-2 mb-1 d-inline-flex"><img src="assets/img/and.png" width="200" alt="" /></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-md-12 col-sm-12 image-column">--}}
{{--                    <div class="image-box">--}}
{{--                        <figure class="image"><img src="assets/img/app.png" class="img-fluid" alt=""></figure>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- ========================== Download App Section =============================== -->--}}

    @endsection
