@extends('layouts.frontend')
@section('contend')
    <!-- START HOME -->
    <section class="bg-home" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center text-white mb-5">
                        <h1 class="display-5 fw-semibold mb-3">Bourse d'échanges 100% gratuit <span
                                class="text-warning fw-bold">Financez vos</span>
                                besoins avec vos surplus.</h1>
                        <p class="fs-17">Valorisez, ça vaut de l'or !.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end container-->
    </section>

    <!-- End Home -->

    <!-- START SHAPE -->
    <div class="position-relative">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150"
                preserveAspectRatio="none" viewBox="0 0 1440 220">
                <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                    <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z"
                        fill="rgba(255, 255, 255, 1)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1004">
                        <rect width="1440" height="250" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->

    <!-- START JOB-LIST -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">Les Offres</h4>
                        <p class="text-muted mb-1">Demandez-nous un travail pour nous parler de votre projet. Nous vous mettrons rapidement en relation avec les freelances qui vous conviennent.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <ul class="job-list-menu nav nav-pills nav-justified flex-column flex-sm-row mb-4"
                        id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="recent-jobs-tab" data-bs-toggle="pill"
                                data-bs-target="#recent-jobs" type="button" role="tab"
                                aria-controls="recent-jobs" aria-selected="true">Recent Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="featured-jobs-tab" data-bs-toggle="pill"
                                data-bs-target="#featured-jobs" type="button" role="tab"
                                aria-controls="featured-jobs" aria-selected="false">Featured Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill"
                                data-bs-target="#freelancer" type="button" role="tab"
                                aria-controls="freelancer" aria-selected="false">Freelancer</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="part-time-tab" data-bs-toggle="pill"
                                data-bs-target="#part-time" type="button" role="tab"
                                aria-controls="part-time" aria-selected="false">Part Time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="full-time-tab" data-bs-toggle="pill"
                                data-bs-target="#full-time" type="button" role="tab"
                                aria-controls="full-time" aria-selected="false">Full Time</button>
                        </li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                            aria-labelledby="recent-jobs-tab">
                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="{{ asset('front/assets/images/featured-job/img-01.png') }}"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane ssRichardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->


                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>

                        </div>
                        <!--end recent-jobs-tab-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END JOB-LIST -->
     <!-- START BLOG-GRID -->
     <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">Les Articles</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <img src="{{ asset('front/assets/images/blog/img-04.jpg') }}" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Alice Mellor</a> - Aug 08, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 432</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">Smartest Applications for Business</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->

                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-05.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Kiera Finch</a> - July 23, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 247</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">How To Increase Trade Show Traffic</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->

                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Toby Lees</a> - July 11, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 188</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">How apps is changing the IT world</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->

                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-07.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Dominic Potter</a> - June 19, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 475</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">Design your apps in your own way</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->

                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-08.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Leon Davey</a> - June 04, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 310</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">How to get creative in your work</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->

                            <div class="col-lg-6 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-09.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline d-flex justify-content-between mb-3">
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><a href="blog-author.html" class="text-muted fw-medium">Harvey Bird</a> - Feb 28, 2021</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 158</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="primary-link"><h6 class="fs-17">What planning process needs ?</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="#" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination job-pagination mb-0 justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                <i class="mdi mdi-chevron-double-left fs-15"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="mdi mdi-chevron-double-right fs-15"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!--end col-->
                        </div><!-- end row -->

                    </div><!--end blog-post-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-5">
                    <div class="sidebar ms-lg-4 ps-lg-4 mt-5 mt-lg-0">
                        <!-- Search widget-->
                        <aside class="widget widget_search">
                            <form class="position-relative">
                                <input class="form-control" type="search" placeholder="Search...">
                                <button class="bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y me-2" type="submit"><span class="mdi mdi-magnify text-muted"></span></button>
                            </form>
                        </aside>
                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Categories</h6>
                            </div>
                            <div class="my-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="education" />
                                    <label class="form-check-label ms-2" for="education">Education</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked />
                                    <label class="form-check-label ms-2" for="flexCheckChecked1">Business</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                                    <label class="form-check-label ms-2" for="flexCheckChecked2">Information</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked3">Interview</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked4">Travel</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked5">Jobs</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6" />
                                    <label class="form-check-label ms-2" for="flexCheckChecked6">Fashion</label>
                                </div>
                            </div>
                        </div><!--end Categories-->

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Popular Post</h6>
                            </div>
                            <ul class="widget-popular-post list-unstyled my-4">
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('front/assets/images/blog/img-01.jpg') }}" alt="" class="widget-popular-post-img rounded" />
                                    <div class="flex-grow-1 text-truncate ms-3">
                                        <a href="#" class="text-dark">The evolution of landing page creativity</a>
                                        <span class="d-block text-muted fs-14">Aug 10, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('front/assets/images/blog/img-02.jpg') }}" alt="" class="widget-popular-post-img rounded" />
                                    <div class="flex-grow-1 text-truncate ms-3"><a href="#" class="text-dark">Beautiful day with friends in paris</a>
                                        <span class="d-block text-muted fs-14">Jun 24, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                    <img src="{{ asset('front/assets/images/blog/img-03.jpg') }}" alt="" class="widget-popular-post-img rounded" />
                                    <div class="flex-grow-1 text-truncate ms-3"><a href="#" class="text-dark">Project discussion with team</a>
                                        <span class="d-block text-muted fs-14">July 13, 2021</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center">
                                    <img src="{{ asset('front/assets/images/blog/img-10.jpg') }}" alt="" class="widget-popular-post-img rounded" />
                                    <div class="flex-grow-1 text-truncate ms-3"><a href="#" class="text-dark">Smartest Applications for Business</a>
                                        <span class="d-block text-muted fs-14">Feb 01, 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div><!--end Polular Post-->

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Text Widget</h6>
                            </div>
                            <p class="mb-0 text-muted mt-3">
                                Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v
                                laborum. Aliquip veniam
                                delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                            </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <div class="sd-title">
                                <h6 class="fs-16 mb-3">Archives</h6>
                            </div>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> March 2021</a> (40)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> April 2021</a> (08)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> Nov 2020</a> (32)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> May 2020</a> (11)</li>
                                <li class="py-1"><a class="me-2 text-muted" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i>  Jun 2019</a> (21)</li>
                            </ul>
                        </div>
                    </div>
                    <!--end sidebar-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- END BLOG-GRID -->
@endsection