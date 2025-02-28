@extends('layouts.frontend')
@section('contend')
    <!-- START HOME -->
    <section class="bg-home" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center text-white mb-5">
                        <h1 class="display-5 fw-semibold mb-3">Plateforme Collaborative de Sécurité & d’Inclusivité Territoriale <span
                                class="text-warning fw-bold">& d’Inclusivité Territoriale</span>
                                </h1>
                        <p class="fs-17">Valorisez, ça vaut de l'or !.
                        </p>
                    </div>
                </div>
                
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
     <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">Les Inscriptions des acteurs</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-7">
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
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
                            </div>

                            <div class="col-lg-4 mb-4">
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
                            </div>

                            <div class="col-lg-4 mb-4">
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
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center min-vh-100"> 
                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-07.jpg') }}" alt="" class="img-fluid">
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
                            </div>                       
                            <div class="col-lg-4 mb-4">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
