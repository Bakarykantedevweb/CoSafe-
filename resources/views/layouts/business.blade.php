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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- <style>
        /* Styles généraux */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            animation: fadeIn 1s ease-in-out;
        }

        /* Bandeau d'en-tête */


        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: auto;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        /* Grille des programmes */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .box h2 {
            color: rgb(79 70 229);
        }

        .box p {
            color: #555;
        }

        /* Section avec images */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .image-box {
            text-align: center;
            transform: scale(0.9);
            transition: transform 0.3s ease-in-out;
        }

        .image-box:hover {
            transform: scale(1);
        }

        .image-box img {
            width: 100%;
            border-radius: 10px;
            max-height: 150px;
            object-fit: cover;
        }

        .image-box p {
            font-weight: bold;
            margin-top: 10px;
            color: #003366;
        }

        /* Boutons CTA */
        .cta {
            display: inline-block;

            color: white;
            padding: 12px 20px;
            margin-top: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .cta:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }
        }

        footer {
            background-color: #222;
            color: white;
            padding: 40px 20px;
            text-align: left;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 10px 20px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 2px solid rgb(79 70 229);
            padding-bottom: 5px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 8px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .footer-column ul li a:hover {
            color: rgb(79 70 229);
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                text-align: center;
                margin-bottom: 20px;
            }

            .footer-column h3 {
                border-bottom: none;
            }
        }

        /* Style du header */


        /* Conteneur du texte */
        .header-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 15px 30px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Titres */
        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #0056b3;
        }

        h2 {
            font-size: 18px;
            font-weight: normal;
            color: #0056b3;
            margin-bottom: 15px;
        }

        /* Boîte d'alerte */
        .alert-box {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .alert-box h3 {
            font-size: 24px;
            font-weight: bold;
            color: red;
        }

        .alert-box p {
            font-size: 16px;
            color: black;
        }
    </style>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style> --}}
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

            {{-- <footer>
                <div class="footer-container">
                    <div class="footer-column">
                        <h3>MENTIONS LÉGALES</h3>
                        <ul>
                            <li><a href="#">À propos</a></li>
                            <li><a href="#">Objectifs & valeurs sociales</a></li>
                            <li><a href="#">Pourquoi nous rejoindre ?</a></li>
                            <li><a href="#">Confidentialité & CGU</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>ESPACE BUSINESS</h3>
                        <ul>
                            <li><a href="#">Devenir Safy Commerçant</a></li>
                            <li><a href="#">Devenir Safy Entreprise</a></li>
                            <li><a href="#">Alertez, Protégez, Solidarisez vos collaborateurs</a></li>
                            <li><a href="#">Initiez des partenariats Écoles-Entreprises</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>ESPACE PROMOTEURS</h3>
                        <ul>
                            <li><a href="#">Devenez Promoteur de territoire sécurisé</a></li>
                            <li><a href="#">Boostez votre économie avec un territoire sécurisé</a></li>
                            <li><a href="#">Lancez des Safe-Challenges pour mobiliser</a></li>
                            <li><a href="#">Initiez des partenariats transfrontaliers</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>ESPACE CITOYENS</h3>
                        <ul>
                            <li><a href="#">Devenez City Angel</a></li>
                            <li><a href="#">Devenez Campus Angel</a></li>
                            <li><a href="#">Relevez des Safe-Challenges</a></li>
                            <li><a href="#">Lancez des Safe-Challenges</a></li>
                        </ul>
                    </div>
                </div>
            </footer> --}}
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
