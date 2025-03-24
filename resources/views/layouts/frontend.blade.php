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

      
        <!-- Navbar End -->

        <div class="main-content">

            <div class="page-content">

                @yield('contend')

            </div>
            <!-- End Page-content -->

            <!-- START SUBSCRIBE -->
           
            <!-- END SUBSCRIBE -->

        
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
