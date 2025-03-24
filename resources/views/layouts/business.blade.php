<!doctype html>
<html lang="en">

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 17:17:47 GMT -->

<head>
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- darkmode js -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
      
    </style>
    <title>Tabaleau de Bord Business</title>
    <style>
        .nav-section-title {
            font-weight: bold;
            padding: 0.5rem 1rem;
            margin-top: 0.5rem;
            font-size: 15px;
        }

        .nav-section-subtitle {
            font-size: 13px;
            color: #6c757d;
            padding: 0 1rem;
            margin-bottom: 0.5rem;
        }

        .nav-indent {
            padding-left: 2rem !important;
            font-size: 13px;
        }

        .nav-indent-small {
            padding-left: 3rem !important;
            font-size: 12px;
            color: #6c757d;
        }

        .club-challenge {
            background-color: rgba(255, 235, 59, 0.2);
        }

        .search-table th,
        .search-table td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        .search-table th {
            background-color: #f8f9fa;
        }

        .type-cell div {
            padding: 4px;
        }

        .type-cell .active {
            background-color: #ffeb3b;
        }

        .logo-white {
            filter: brightness(0) invert(1);
            max-width: 100%;
            height: auto;
        }
    </style>
    @livewireStyles
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layouts.inc.business.nav')

        <!-- Page Content -->
        <main id="page-content">
            @include('layouts.inc.business.header')
            <!-- Page Header -->
            <!-- Container fluid -->
            @yield('content')
        </main>
    </div>

    <!-- Script -->

    <!-- Libs JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNxSaeFrFQx6ToCIphxlQhDIrAwjdMnBU&libraries=places">
    </script>

    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
    <!-- Ajouter Leaflet.js -->


    @livewireScripts
</body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 17:17:48 GMT -->

</html>
