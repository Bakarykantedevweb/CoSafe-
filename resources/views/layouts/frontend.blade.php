<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/jobvia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:02:22 GMT -->

<head>


    <meta charset="utf-8" />
    <title>COSAFE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Pichforest" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico') }}">

    <!-- Choise Css -->
    <link rel="stylesheet" href="{{ asset('front/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('front/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('front/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('front/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!--Custom Css-->

    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">


</head>

<body>
    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--end page Loader -->

    <!-- Begin page -->
    <div>

        <!-- START TOP-BAR -->
        <div class="top-bar">
            <div class="container-fluid custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-7">
                        <ul class="list-inline mb-0 text-center text-md-start">
                            <li class="list-inline-item">
                                <p class="fs-13 mb-0"> <i class="mdi mdi-map-marker"></i> Votre emplacement: <a
                                        href="javascript:void(0)" class="text-dark">France</a></p>
                            </li>
                            <li class="list-inline-item">
                                <ul class="topbar-social-menu list-inline mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-facebook-messenger-alt"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-envelope"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-twitter-alt"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                    <div class="col-md-5">
                        <ul class="list-inline mb-0 text-center text-md-end">
                            <li class="list-inline-item align-middle">
                                <div class="dropdown d-inline-block language-switch">
                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img id="header-lang-img" src="{{ asset('front/assets/images/flags/us.jpg') }}"
                                            alt="Header Language" height="16" />
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="eng">
                                            <img src="{{ asset('front/assets/images/flags/us.jpg') }}" alt="user-image"
                                                class="me-1" height="12" />
                                            <span class="align-middle">English</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="sp">
                                            <img src="{{ asset('front/assets/images/flags/spain.jpg') }}"
                                                alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Spanish</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="gr">
                                            <img src="{{ asset('front/assets/images/flags/germany.jpg') }}"
                                                alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">German</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="it">
                                            <img src="{{ asset('front/assets/images/flags/italy.jpg') }}"
                                                alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Italian</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="ru">
                                            <img src="{{ asset('front/assets/images/flags/russia.jpg') }}"
                                                alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Russian</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END TOP-BAR -->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
                    <img src="{{ asset('front/assets/images/logo-full.jpg') }}" height="22" alt=""
                        class="logo-dark" />
                    <img src="{{ asset('front/assets/images/logo-full.jpg') }}" height="22" alt=""
                        class="logo-light" />

                </a>
                <div>
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center">
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="homedrop" role="button"
                                data-bs-toggle="dropdown">
                                Acceuil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Offres</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="jobsdropdown" role="button" data-bs-toggle="dropdown">
                                Creer un compte <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="jobsdropdown">
                                <li><a class="dropdown-item" href="{{ url('campus/register') }}">Campus Angels</a></li>
                                <li><a class="dropdown-item" href="{{ url('city/register') }}">City Angels</a></li>
                                <li><a class="dropdown-item" href="{{ url('territory/register') }}">Territory Guardians </a></li>
                                <li><a class="dropdown-item" href="">Business Guardians  </a></li>
                                <li><a class="dropdown-item" href="">Social Sponsors  </a></li>
                            </ul>
                        </li>
                    </ul><!--end navbar-nav-->
                </div>
            </div>
            <!--end container-->
        </nav>
        <!-- Navbar End -->

        <div class="main-content">

            <div class="page-content">

                @yield('contend')

            </div>
            <!-- End Page-content -->

            <!-- START SUBSCRIBE -->
            <section class="bg-subscribe">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="text-center text-lg-start">
                                <h4 class="text-white">Get New Jobs Notification!</h4>
                                <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <form class="subscribe-form" action="#">
                                    <div class="input-group justify-content-center justify-content-lg-end">
                                        <input type="text" class="form-control" id="subscribe"
                                            placeholder="Enter your email">
                                        <button class="btn btn-primary" type="button"
                                            id="subscribebtn">Subscribe</button>
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
                <div class="email-img d-none d-lg-block">
                    <img src="assets/images/subscribe.png" alt="" class="img-fluid">
                </div>
            </section>
            <!-- END SUBSCRIBE -->

            <!-- START FOOTER -->
            <section class="bg-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                                <h4 class="text-white mb-4">Jobvia</h4>
                                <p class="text-white-50">It is a long established fact that a reader will be of a page
                                    reader
                                    will be of at its layout.</p>
                                <p class="text-white mt-3">Follow Us on:</p>
                                <ul class="footer-social-menu list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><i
                                                class="uil uil-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="uil uil-linkedin-alt"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="uil uil-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-6">
                            <div class="footer-item mt-4 mt-lg-0">
                                <p class="fs-16 text-white mb-4">Company</p>
                                <ul class="list-unstyled footer-list mb-0">
                                    <li><a href="about.html"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                                    <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Contact Us</a>
                                    </li>
                                    <li><a href="services.html"><i class="mdi mdi-chevron-right"></i> Services</a>
                                    </li>
                                    <li><a href="blog.html"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                                    <li><a href="team.html"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                                    <li><a href="pricing.html"><i class="mdi mdi-chevron-right"></i> Pricing</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-6">
                            <div class="footer-item mt-4 mt-lg-0">
                                <p class="fs-16 text-white mb-4">For Jobs</p>
                                <ul class="list-unstyled footer-list mb-0">
                                    <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser
                                            Categories</a></li>
                                    <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser
                                            Jobs</a></li>
                                    <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job
                                            Details</a></li>
                                    <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark
                                            Jobs</a></li>
                                </ul>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-6">
                            <div class="footer-item mt-4 mt-lg-0">
                                <p class="text-white fs-16 mb-4">For Candidates</p>
                                <ul class="list-unstyled footer-list mb-0">
                                    <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i>
                                            Candidate List</a></li>
                                    <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i>
                                            Candidate Grid</a></li>
                                    <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i>
                                            Candidate Details</a></li>
                                </ul>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-6">
                            <div class="footer-item mt-4 mt-lg-0">
                                <p class="fs-16 text-white mb-4">Support</p>
                                <ul class="list-unstyled footer-list mb-0">
                                    <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a>
                                    </li>
                                    <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                                    <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section>
            <!-- END FOOTER -->

            <!-- START FOOTER-ALT -->
            <div class="footer-alt">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="text-white-50 text-center mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> &copy; Jobvia - Job Listing Page
                                Template by <a href="https://pichforest.com/" target="_blank"
                                    class="text-reset text-decoration-underline">Pichforest</a>
                            </p>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
            <!-- END FOOTER -->

            <!-- Style switcher -->
            <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                <div>
                    <h6>Select your color</h6>
                    <ul class="pattern list-unstyled mb-0">
                        <li>
                            <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                        </li>
                        <li>
                            <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                        </li>
                        <li>
                            <a class="color-list color3" href="javascript: void(0);"
                                onclick="setColor('purple')"></a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <h6>Light/dark Layout</h6>
                        <div class="text-center mt-3">
                            <!-- light-dark mode -->
                            <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                <i class="uil uil-brightness mode-dark mx-auto"></i>
                                <i class="uil uil-moon mode-light"></i>
                            </a>
                            <!-- END light-dark Mode -->
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <a href="javascript: void(0);" class="settings rounded-end"><i
                            class="mdi mdi-cog mdi-spin"></i></a>
                </div>
            </div>
            <!-- end switcher-->

            <!--start back-to-top-->
            <button onclick="topFunction()" id="back-to-top">
                <i class="mdi mdi-arrow-up"></i>
            </button>
            <!--end back-to-top-->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('front/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Choice Js -->
    <script src="{{ asset('front/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Swiper Js -->
    <script src="{{ asset('front/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Job-list Init Js -->
    <script src="{{ asset('front/assets/js/pages/job-list.init.js') }}"></script>

    <!-- Switcher Js -->
    <script src="{{ asset('front/assets/js/pages/switcher.init.js') }}"></script>

    <!-- Index Init Js -->
    <script src="{{ asset('front/assets/js/pages/index.init.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('front/assets/js/app.js') }}"></script>


</body>

<!-- Mirrored from preview.pichforest.com/jobvia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:03:02 GMT -->

</html>
