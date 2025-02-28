<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/jobvia/layouts/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:03:36 GMT -->

<head>


    <meta charset="utf-8" />
    <title>Creation de compte | CoSafe | Business Guardians </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Pichforest" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico') }}">

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


        <div class="main-content">

            <div class="page-content">

                <!-- START SIGN-UP -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="card auth-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 text-center">
                                            <div class="card-body p-4">
                                                <a href="/">
                                                    <img src="{{ asset('front/assets/images/logo-full.jpg') }}"
                                                        alt="" class="logo-light">
                                                    <img src="{{ asset('front/assets/images/logo-full.jpg') }}"
                                                        width="200" alt="" class="logo-dark">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="{{ asset('front/assets/images/auth/sign-up.png') }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="auth-content card-body p-5 text-white">
                                                <div class="w-100">
                                                    <div class="text-center">
                                                        <h5>Creation de compte Business Guardians </h5>
                                                    </div>
                                                    <form action="{{ url('business/register') }}" class="auth-form" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="usernameInput"
                                                                class="form-label">Nom Complet</label>
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Enter your nom complet">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="passwordInput" class="form-label">Email</label>
                                                            <input type="email" name="email" class="form-control"
                                                                placeholder="Enter your email">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Mot de
                                                                passe</label>
                                                            <input type="password" name="password" class="form-control"
                                                                id="passwordInput" placeholder="Enter your password">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Confirmer Mot de
                                                                passe</label>
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control" id="passwordInput"
                                                                placeholder="Enter your password">
                                                            @error('password_confirmation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="btn btn-white btn-hover w-100">Creer mon compte
                                                                </buttom>
                                                        </div>
                                                    </form>
                                                    <div class="mt-3 text-center">
                                                        <p class="mb-0">Déjà membre ? <a
                                                                href="{{ url('business/login') }}"
                                                                class="fw-medium text-white text-decoration-underline">
                                                                Se Connecter </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end auth-box-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END SIGN-UP -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

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
                    <a class="color-list color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
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
            <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('front/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



    <!-- Switcher Js -->
    <script src="{{ asset('front/assets/js/pages/switcher.init.js') }}"></script>

</body>

<!-- Mirrored from preview.pichforest.com/jobvia/layouts/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:03:36 GMT -->

</html>
