<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/jobvia/layouts/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:03:36 GMT -->
<head>


        <meta charset="utf-8" />
        <title>Connexion | CoSafe | Territory Guardians </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Pichforest" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('front/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('front/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
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
        .header {
            display: flex;
            justify-content: space-around;

            color: white;
            padding: 15px;
            font-weight: bold;
            border-radius: 10px;
            animation: slideIn 1s ease-in-out;
        }

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
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
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
    border-bottom: 2px solid  rgb(79 70 229);
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
    color:  rgb(79 70 229);
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
header {
    background: url('../back.png') no-repeat center center/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    position: relative;
}

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
    </head>

    <body>
         <!--start page Loader -->

        <!--end page Loader -->

        <!-- Begin page -->
        <div>


            <div class="main-content">

                <div class="page-content">

                     <!-- START SIGN-IN -->
                     <header>
        <div class="bg-indigo-600 header-container">
            <h1>Communauté Sécurisée & Solidaire</h1>
            <h2>La Force des Anges gardiens</h2>
            <div class="alert-box">
                <h3>SOS - ALERTE</h3>
                <p>Vous êtes en danger ? Vous êtes témoin d'une incivilité ou d'une violence ?</p>
            </div>
        </div>
    </header>

    <nav class="bg-indigo-600 header">
        <div>1️⃣ VEILLEZ, PRÉVENEZ, PROTÉGEZ</div>
        <div>2️⃣ ALERTEZ – PROTÉGEZ – SOLIDARISEZ</div>
        <div>3️⃣ ASSUREZ LA SÉCURITÉ DE TOUS</div>
        <div>4️⃣ AGISSEZ POUR UN TERRITOIRE SÉCURISÉ</div>
    </nav>
                     <!-- START SIGN-IN -->
                     <section >
                     <div class="max-w-md mx-auto">
                     <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card bg-indigo-600">
                                        <div class="row g-0">

                                            <div class="col-lg-12">
                                                <div class="auth-content card-body p-5 h-100 text-white">
                                                    <div class="w-100">
                                                        <div class="text-center mb-4">
                                                            <h3>Connexion Territory Guardians </h3>
                                                            <p class="text-white-70">Connectez-vous a votre compte COSAFE.</p>
                                                        </div>
                                                        <form action="{{ url('territory/login') }}" class="auth-form" method="POST">
                                                            @csrf
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

                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-white btn-hover w-100">Se Connecter</button>
                                                            </div>
                                                        </form>
                                                        <div class="mt-4 text-center">
                                                            <p class="mb-0">Vous n'avez pas de compte ? <a href="{{ url('territory/register') }}" class="fw-medium text-white text-decoration-underline"> S'inscrire</a></p>
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
                    <!-- END SIGN-IN -->

                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <footer>
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
    </footer>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('front/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



        <!-- Switcher Js -->
        <script src="{{ asset('front/assets/js/pages/switcher.init.js') }}"></script>

    </body>

<!-- Mirrored from preview.pichforest.com/jobvia/layouts/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2025 17:03:36 GMT -->
</html>
