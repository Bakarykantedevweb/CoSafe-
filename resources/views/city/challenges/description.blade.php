@extends('layouts.city')

@section('content')
<style>
.btn-primary, .btn-primary.disabled {
    /* background: #e42d29; */
    /* border: 1px solid#e42d29; */
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in;
}
</style>
<style>
        .home-slider .item {
            min-height: 300px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            text-align: left;
        }

        .home-slider .item,
        .property-slider .item {
            transition: all 0.6s;
            border-radius: 0;
            position: relative;
            height: 300px;
        }

        .neary_section_first .location {
            font-size: 1.1rem;
        }

        .bg-success {
            background-color: #1eaf65 !important;
        }

        @media (min-width: 993px) {
            .home-slider-title h3 {
                font-size: 46px;
                line-height: 1.5;
                font-weight: 600;
            }
        }

        .bouton {
            display: inline-block;
            padding: 15px 25px;
            color: #ffffff;
            margin-top: 1rem;
            background: #04b169 !important;
            box-shadow: 0px 0px 0px 5px rgb(255 255 255 / 20%);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
        }

        .bouton a:hover {
            color: #ffffff;
        }

        a.link:hover,
        a.link:focus,
        a:hover,
        a:focus {
            color: #ffffff;
        }


        .fontmobile {
            font-size: 43px;
        }

        .fontmobile2 {
            font-size: 36px;
        }

        @media (max-width: 768px) {
            .fontmobile {
                font-size: 28px;
                /* Nouvelle taille de police pour les appareils mobiles */
                line-height: 32px;
            }

            .fontmobile2 {
                font-size: 19px;
                /* Nouvelle taille de police pour les appareils mobiles */
                line-height: 32px;
            }

            .fontmobile3 {
                font-size: 21px;
                /* Nouvelle taille de police pour les appareils mobiles */
                line-height: 32px;
            }
        }

        @media (max-width: 768px) {

            .tabs_system {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                list-style: none;
                padding: 0;
            }

            .nav-item {
                /* flex: 0 0 calc(25% - 20px); */
                flex: 0 -1 25%;
                max-width: 35%;
            }

            .tabs_system.nav-pills .nav-link {
                background: #e9ebf1;
                padding: 0.5rem 0.3rem;
                font-size: 9px;
                font-weight: 600;
                margin: 5px;
                color: #5e6888;
            }

            .mo-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        .neary_section_first .nearby_place_title {
            font-size: 16px;
            margin: 0;
            color: #2fb166;
            line-height: 1.1;
            font-weight: 500;
        }

        .text-justify {
            text-align: justify;
        }
    </style>
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#f4f4f4 url({{asset('assetsfront/img/background/4.png') }});"
         data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="text-center">{{ $challenge->nomchallenge }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Our Story Start ================================== -->
    <section class="single-pdt-page bg-grey py-5">
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="property_block_wrap">

                        <div class="property_block_wrap_header">
                            <ul class="nav nav-pills tabs_system" id="pill-tab" role="tablist"
                                style="justify-content: center;">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-walk-tab" data-bs-toggle="pill" href="#pills-walk"
                                        role="tab" aria-controls="pills-walk" aria-selected="true">BRIEF</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-nearby-tab" data-bs-toggle="pill" href="#pills-nearby"
                                        role="tab" aria-controls="pills-nearby" aria-selected="false">PARTICIPATION</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-nearby-tab" data-bs-toggle="pill" href="#pills-realiser"
                                        role="tab" aria-controls="pills-type" aria-selected="false">A REALISER</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-nearby-tab" data-bs-toggle="pill" href="#pills-gagner"
                                        role="tab" aria-controls="pills-secteurs" aria-selected="false">A GAGNER</a>
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <div class="sidetab-content">
                                <div class="tab-content" id="pill-tabContent">
                                    <!-- Book Now Tab -->
                                    <div class="tab-pane fade show active" id="pills-walk" role="tabpanel"
                                        aria-labelledby="pills-walk-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12">
                                                <h1 class="text-center" style="color: #00b26e;">
                                                    Tesrer <i
                                                        class=" fa fa-solid fa-face-smile"></i></h1>
                                                <img class="img-fluid img-thumbnail mx-auto d-block" width="1000"
                                                    height="500" src="https://campusclub.eu/images/challenges/171753298934.jpg"
                                                    style="object-fit: cover;"><br><br>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-md-7">
                                                <div class="nearby-wrap">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                                    href="#collapseOne">
                                                                    Description du challenge <a data-bs-toggle="collapse"
                                                                        href="#collapseOne" style="color: #00b26e;"> <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-justify">
                                                                    {{ $challenge->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                                    href="#collapseTwo">
                                                                    Objectifs <a data-bs-toggle="collapse"
                                                                        href="#collapseTwo" style="color: #00b26e;"> <i
                                                                            class="fa fa-arrow-right"></i></a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-justify">
                                                                    {{ $challenge->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                                    href="#collapseThree">
                                                                    Compétences
                                                                    <a data-bs-toggle="collapse" href="#collapseThree"
                                                                        style="color: #00b26e;">
                                                                        <i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-justify">
                                                                    {{ $challenge->description }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-3 mo-6 col-sm-6 mb-3">
                                                        <a target="_blank" href="/images/challenges/171753298934.jpg"
                                                            class="read-more theme-bg bouton" style=""> <i
                                                                class="fa fa-file-word"></i> Explicatif</a>
                                                    </div>
                                                    <div class="col-lg-3 mo-6 col-sm-6  mb-3">
                                                        <a target="_blank"
                                                            href="/images/challenges/conditions/171753298915.jpg"
                                                            class="read-more theme-bg bouton" style=""><i
                                                                class="fa fa-file-word"></i> Conditions</a>
                                                    </div>
                                                    <div class="col-lg-3 mo-6 col-sm-6 mb-3">
                                                        <a class="read-more theme-bg bouton" onclick="toggleShareBar()"><i
                                                                class="fa fa-share"></i> Partager</a>
                                                    </div>
                                                    <div class="col-lg-3 mo-6 col-sm-6  mb-3">
                                                        <a class="read-more theme-bg bouton"
                                                            onclick="toggleQuestionBar()"><i class="fa fa-envelope"></i>
                                                            Question
                                                        </a>
                                                    </div>
                                                </div>






                                                <div id="sharebar" class="row justify-content-center mb-3"
                                                    style="display: none;">

                                                    <!-- property main detail -->
                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <!-- Single Block Wrap -->
                                                        <div class="property_block_wrap">

                                                            <div class="property_block_wrap_header">
                                                                <h4 class="property_block_title text-center">Partager le
                                                                    challenge sur:</h4>
                                                            </div>

                                                            <div class="block-body justify-content-center"
                                                                style="display: flex;">

                                                                <ul class="social-icons" style="justify-content: center;">
                                                                    <li><a class="facebook" href="#"><i
                                                                                class="lni-facebook"></i></a></li>
                                                                    <li><a class="twitter" href="#"><i
                                                                                class="lni-twitter"></i></a></li>
                                                                    <li><a class="linkedin" href="#"><i
                                                                                class="lni-instagram"></i></a></li>
                                                                    <li><a class="linkedin" href="#"><i
                                                                                class="lni-linkedin"></i></a></li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>




                                                <div id="questionbar" class="row justify-content-center"
                                                    style="display: none;">
                                                                                                            
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div>
                                                                <div>
                                                                    <div class="card">

                                                                        <!-- Modal Header -->
                                                                        <div class="card-header bg-success">
                                                                            <h3 class="card-title text-light text-center">Vous
                                                                                avez une question ?</h3>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <div class="card-body">
                                                                            <form method="post"
                                                                                action="https://campusclub.eu/enregistrersupport"
                                                                                enctype="multipart/form-data">
                                                                                <input type="hidden" name="_token" value="AJSx815sHJ9thNvPhZaQH85aDiM4RyK8NGAzvsRK">                                                                                <div class="form-group mb-3">
                                                                                    <label for="email">Email</label>
                                                                                    <input type="email" name="email"
                                                                                        class="form-control"
                                                                                        value="recruteur@mail.com">
                                                                                    <input type="hidden" name="id_challenge"
                                                                                        class="form-control"
                                                                                        value="2">
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <label for="pwd">Message:</label>
                                                                                    <textarea class="form-control" name="message" placeholder="Ecrire un message"></textarea>
                                                                                </div>

                                                                                <button type="submit"
                                                                                    class="btn btn-success pull-right"
                                                                                    style="float: right;">
                                                                                    Envoyer
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                                                                    </div>









                                            </div>


                                            <div class="col-lg-5 col-md-5">
                                                <div class="nearby-wrap">
                                                    <h5 class="text-center">{{ $challenge->description }}</h5>
                                                    <input type="hidden" id="challengeId" value="2">
                                                    <div class="neary_section_list">

                                                        <div class="neary_section justify-content-center">
                                                            <div class="neary_section_first">
                                                                <div class="row mb-3">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title">
                                                                            <i class="fa fa-user"></i>
                                                                            Diffuseur
                                                                        </h4>
                                                                        <span
                                                                            class="location">Lucas Janssens</span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="fa fa-list"></i> Type de challenge
                                                                        </h4>
                                                                        <span class="location">
                                                                        {{ $challenge->description }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="fa fa-map-marker"></i>
                                                                            Localisation
                                                                        </h4>
                                                                        <span class="location">
                                                                            Luxembourg,
                                                                            Grevenmacher
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title">
                                                                            <i class="fa fa-users"></i>
                                                                            Public cible:
                                                                        </h4>
                                                                        <span class="location">
                                                                            Jeune diplômé </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="fa fa-calendar"></i> Date de début
                                                                        </h4>
                                                                        <span class="location">
                                                                            19 juin 2024                                                                        </span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="fa fa-calendar"></i> Date de fin
                                                                        </h4>
                                                                        <span class="location">
                                                                            27 juin 2024                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <h2 style="font-size: 16px">
                                                                        Nombres participants :
                                                                    </h2>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="bi bi-zoom-out"></i> Min
                                                                        </h4>
                                                                        <span class="location">
                                                                            12
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title"><i
                                                                                class="bi bi-zoom-in"></i> Max
                                                                        </h4>
                                                                        <span class="location">
                                                                            80
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title">
                                                                            <i class="bi bi-person-wheelchair"></i>
                                                                            Thématique
                                                                            sociale
                                                                            soutenue :
                                                                        </h4>
                                                                        <span class="location">
                                                                            Agir pour l&#039;environnement &amp; la planète
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h4 class="nearby_place_title">
                                                                            <i class="bi bi-person-rolodex"></i>
                                                                            Association
                                                                            bénéficiaire
                                                                        </h4>
                                                                        <span class="location">
                                                                            Hggg
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-lg-12">
                                                                        <h4 class="nearby_place_title">
                                                                            <i class="bi bi-trophy-fill"></i> A gagner :
                                                                        </h4>
                                                                        <span class="location">
                                                                            Badge Technicien(ne) médical(e) +
                                                                            2636 €
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <center> <button type="button"
                                                                                class="read-more theme-bg bouton"
                                                                                data-bs-placement="top"
                                                                                data-bs-toggle="popover"
                                                                                data-bs-html="true"
                                                                                data-bs-content="&nbsp;<a href='#' class='reaction-link text-info like' data-reaction-id='1'><i class='fas fa-thumbs-up'></i> J’aime</a> &nbsp;<a href='#' class='reaction-link text-warning dislike' data-reaction-id='2'><i class='fas fa-thumbs-down'></i> Je n’aime pas</a> &nbsp;<a href='#' class='reaction-link text-danger heart' data-reaction-id='3'><i class='fas fa-heart'></i> Cœur</a>">Réagir</button>
                                                                        </center>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="nearby-wrap">
                                                    <h5>Promoteur du challenge: </h5>
                                                    <div class="neary_section_list">

                                                        <div class="neary_section">
                                                            <div class="neary_section_first">
                                                                <img src="https://campusclub.eu/images/challenges/promoteur.png"
                                                                    class="img-fluid">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Appointment Now Tab -->
                                    <div class="tab-pane fade" id="pills-nearby" role="tabpanel"
                                        aria-labelledby="pills-nearby-tab">
                                        <!-- Schools -->


                                        <!-- Hotel & Restaurant -->
                                        <h5>Participation au challenge</h5>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseOne">
                                                        Calendrier<a data-bs-toggle="collapse" href="#collapseOne"
                                                            style="color: #00b26e;"> <i class="fa fa-arrow-right"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Phase de candidature
                                                        </h4>

                                                        <p class="text-center">
                                                            Inscription : Du
                                                            <span class="fw-bold">
                                                                19 juin 2024
                                                            </span>
                                                            au
                                                            <span class="fw-bold">
                                                                27 juin 2024
                                                            </span>
                                                        </p>


                                                        <h4 class="text-center alert alert-success">
                                                            Phase de sélection
                                                        </h4>

                                                        <p class="text-center">
                                                            Sélection : Du
                                                            <span class="fw-bold">
                                                                28 juin 2024
                                                            </span>
                                                            au
                                                            <span class="fw-bold">
                                                                30 juin 2024
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseTwo">
                                                        Forme des équipes <a data-bs-toggle="collapse" href="#collapseTwo"
                                                            style="color: #00b26e;"> <i class="fa fa-arrow-right"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Composition des équipes
                                                        </h4>
                                                        <p class="text-center mb-3">
                                                            Teets
                                                        </p>

                                                        <h4 class="text-center alert alert-success">
                                                            Nombres équipes participantes
                                                        </h4>

                                                        <p class="text-center mb-3">
                                                            12 -
                                                            80
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseThree">
                                                        Critères
                                                        <a data-bs-toggle="collapse" href="#collapseThree"
                                                            style="color: #00b26e;">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Critères de participation
                                                        </h4>
                                                        <p class="text-center mb-3">
                                                            Test ceitzria
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>



                                    <div class="tab-pane fade" id="pills-realiser" role="tabpanel"
                                        aria-labelledby="pills-nearby-tab">
                                        <!-- Schools -->


                                        <h5>A réaliser pour le challenge</h5>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseOne">
                                                        Réalisations attendues
                                                        <a data-bs-toggle="collapse" href="#collapseOne"
                                                            style="color: #00b26e;">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Ce que vous devez réaliser
                                                        </h4>
                                                        <p class="text-center mb-3">
                                                            Ggg
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseTwo">
                                                        Autres Actions suggérées
                                                        <a data-bs-toggle="collapse" href="#collapseTwo"
                                                            style="color: #00b26e;">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Autres suggestions à réaliser
                                                        </h4>

                                                        <p class="text-center mb-3">
                                                            Hhgg
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>



                                        </div>


                                    </div>



                                    <div class="tab-pane fade" id="pills-gagner" role="tabpanel"
                                        aria-labelledby="pills-nearby-tab">
                                        <!-- Schools -->
                                        <h5>A gagner </h5>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseOne">
                                                        Qui sommes-nous ?<a data-bs-toggle="collapse" href="#collapseOne"
                                                            style="color: #00b26e;"> <i class="fa fa-arrow-right"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">Promoteur du challenge
                                                        </h4>

                                                        <div class="row">
                                                            <h2 style="font-size: 16px">
                                                                Informations Personnelles :
                                                            </h2>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">Nom
                                                                    complet :
                                                                </h4>
                                                                <span class="location">
                                                                    wassi soultone
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Email :
                                                                </h4>
                                                                <span class="location">
                                                                    gnjjhgf@gmail.com
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Téléphone :
                                                                </h4>
                                                                <span class="location">
                                                                    07 80 93 03 38
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <h2 style="font-size: 16px">
                                                                Localisation :
                                                            </h2>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Pays :
                                                                </h4>
                                                                <span class="location">
                                                                    Luxembourg
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Ville :
                                                                </h4>
                                                                <span class="location">
                                                                    Esch - sur - Alzette
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Code Postal :
                                                                </h4>
                                                                <span class="location">
                                                                    Bp990
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h4 class="nearby_place_title" style="font-size: 16px">
                                                                    Adresse :
                                                                </h4>
                                                                <span class="location">
                                                                    Agblangandan
                                                                </span>
                                                            </div>

                                                                                                                            <div class="col-lg-6">
                                                                    <h4 class="nearby_place_title"
                                                                        style="font-size: 16px">
                                                                        Nom commercial :
                                                                    </h4>
                                                                    <span class="location">
                                                                        Test Test
                                                                    </span>
                                                                </div>
                                                            
                                                                                                                            <div class="col-lg-6">
                                                                    <h4 class="nearby_place_title"
                                                                        style="font-size: 16px">
                                                                        Numéro Entreprise :
                                                                    </h4>
                                                                    <span class="location">
                                                                        57
                                                                    </span>
                                                                </div>
                                                            

                                                                                                                            <div class="col-lg-6">
                                                                    <h4 class="nearby_place_title"
                                                                        style="font-size: 16px">
                                                                        Numéro D'agréation :
                                                                    </h4>
                                                                    <span class="location">
                                                                        57
                                                                    </span>
                                                                </div>
                                                            
                                                                                                                            <div class="col-lg-6">
                                                                    <h4 class="nearby_place_title"
                                                                        style="font-size: 16px">
                                                                        Types d'activités :
                                                                    </h4>
                                                                    <span class="location">
                                                                        Expertises
                                                                    </span>
                                                                </div>
                                                            
                                                                                                                            <div class="col-lg-6">
                                                                    <h4 class="nearby_place_title"
                                                                        style="font-size: 16px">
                                                                        Description :
                                                                    </h4>
                                                                    <span class="location">
                                                                        Gggg
                                                                    </span>
                                                                </div>
                                                            

                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 style="color: #00b26e;" data-bs-toggle="collapse"
                                                        href="#collapseTwo">
                                                        Gains & Lots<a data-bs-toggle="collapse" href="#collapseTwo"
                                                            style="color: #00b26e;"> <i class="fa fa-arrow-right"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <h4 class="text-center alert alert-success">
                                                            Dotation & Objet du challenge (A gagner)
                                                        </h4>
                                                        <p class="text-center mb-3">
                                                            Tezter
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                                                                                    <div class="alert alert-info d-flex align-items-center justify-content-center mt-4"
                                    role="alert">
                                    <div>
                                        <i class="mr-2 fa fa-check"></i> Défit déjà relever
                                    </div>
                                </div>
                            

                            
                                            </div>
                </div>
            </div>
    </section>
    <script>
        function toggleShareBar() {
            var searchbar = document.getElementById("sharebar");
            if (searchbar.style.display === "none" || searchbar.style.display === "") {
                searchbar.style.display = "block";
            } else {
                searchbar.style.display = "none";
            }
        }
    </script>
    <script>
        function toggleQuestionBar() {
            var searchbar1 = document.getElementById("questionbar");
            if (searchbar1.style.display === "none" || searchbar1.style.display === "") {
                searchbar1.style.display = "block";
            } else {
                searchbar1.style.display = "none";
            }
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl, {
                    template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div> </div>'
                });
            });

            document.addEventListener('click', function(event) {
                var clickedElement = event.target;

                if (clickedElement.classList.contains('reaction-link')) {
                    event.preventDefault();

                    // Extraire le type de réaction directement des classes de l'élément
                    var selectedReaction = extractReactionTypeFromClasses(clickedElement);

                    var challengeId = document.getElementById('challengeId').value;

                    console.log("challengeId : ", challengeId);
                    console.log("selectedReaction : ", selectedReaction);
                    console.log("selectedReaction : ", selectedReaction);

                    fetch('/reaction', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content'),
                            },
                            body: JSON.stringify({
                                reaction: selectedReaction,
                                challenge_id: challengeId,
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                        })
                        .catch(error => {
                            console.error('Erreur lors de l\'enregistrement de la réaction:', error);
                        });

                    // Fermer le popover
                    var popover = bootstrap.Popover.getInstance(document.querySelector(
                        '[data-bs-toggle="popover"]'));
                    popover.hide();
                }
            });
        });

        function extractReactionTypeFromClasses(element) {
            // Recherchez la classe spécifique indiquant le type de réaction
            if (element.classList.contains('like')) {
                return '1';
            } else if (element.classList.contains('dislike')) {
                return '0';
            } else if (element.classList.contains('heart')) {
                return '2';
            }

            // Retournez une valeur par défaut ou effectuez d'autres manipulations selon vos besoins
            return 'default';
        }
    </script>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-pdt-wrapper">
                        <div class="row">
                            <div class="col-lg-7 col-xl-7 mt-2 mt-md-5 mt-lg-0">

                                <div class="tab-blk-style bg-white ">
                                    <!-- /pdt-item-nav -->
                                    <div class="tab-content">
                                        <div class="fade show tab-pane product-tab active" id="product-details">
                                            <div class="tab-content-wrapper p-4">
                                                <h3 class="mb-3">Description du campus challenge</h3>
                                                <p>{{ $challenge->description }}</p>
                                                <h3 class="mb-3">Critères </h3>
                                                <p>{{ $challenge->criteres }}</p>
                                                <img class="img-fluid thumbnail" src="{{ asset('storage/app/'.$challenge->image)}}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /tab-content -->
                                </div>
                                <div class="share-info-card bg-white mt-4 p-4">
                                    <span data-feather="tag" class="mr-3 text-theme"></span>
                                    <h5 class="text-grey d-inline-block align-middle">Dotation (Gains)</h5>
                                    <hr class="my-4">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div
                                                class="alert alert-custom-color alert-dismissible py-1 px-2 d-inline-block float-left mr-3">
                                                <span class="font-xs mr-3">{{ $challenge->dotation }}</span>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="" class="btn btn-lg btn-warning btn-block"> <i class="fa fa-file-word"></i>  Fichier explicatif</a>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="" class="btn btn-lg btn-outline-warning btn-block"> <i class="fa fa-file-word"></i> Conditions particulières</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /col-md-8 -->
                            <div class="col-lg-5 col-xl-5">
                                <aside class="sidebar sidebar-user mt-lg-0" style="top: 0;">
                                    <div class="seller-info-card bg-white p-4 mb-4">
                                        <div class="">
                                            <span data-feather="mail" class="mr-3 text-theme"></span>
                                            <h5 class="text-grey d-inline-block align-middle">A propos
                                                du promoteur</h5>
                                        </div>
                                        <hr class="my-4">
                                        <div class="media">

                                                <div class="media-body">
                                                    <h4><i class="fa fa-user"></i> {{ $challenge->nomcomplet }}<span data-feather="award"
                                                                                          data-toggle="tooltip"
                                                                                          title="Top Rated Seller"
                                                                                          class="ml-2 text-green"></span>
                                                    </h4>
                                                    <a class="d-inline-block my-3"><span data-feather="phone-call"
                                                                                         class="text-theme mr-2"></span><span
                                                            class="text-grey d-inline-block align-middle"><i class="fa fa-phone"></i>  {{ $challenge->numero }}</span></a>
                                                    <p class="text-grey"><span data-feather="calendar"
                                                                               class="text-theme mr-2"></span><span
                                                            class="text-grey d-inline-block align-middle"><i class="fa fa-map-marker"></i> Localisation : {{ $challenge->pays }}, {{ $challenge->region }}, {{ $challenge->ville }}</span>
                                                    </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="pdt-info-card bg-white">
                                        <div class="price-blk">
                                            <div class="d-block d-lg-flex justify-content-between">
                                                <strong>Type: {{ $challenge->type }}</strong>
                                            </div>
                                            <div class="d-block justify-content-between align-items-center mt-4">
                                                <p> Secteurs d'activités:</p>
                                                <h4 class="font-bold text-theme">
                                                     {{ $challenge->secteurs }}

                                                </h4><br>
                                                <p class="mt-4 mt-lg-0 text-red font-xs d-inline-block font-bold align-middle">
                                                    <span data-feather="clock" class="animate-blink mr-2"></span>Date
                                                    lancement: {{ $challenge->datelancement }} <br>
                                                    Date cloture: {{ $challenge->datecloture }}
                                                    </p>
                                            </div>
                                            <hr class="my-4">
                                            <ul class="font-bold list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-theme">Pays du challenge:</span>
                                                   {{ $challenge->payschallenge }}, {{ $challenge->villechallenge }}
                                                </li>

                                                <li class="list-item">
                                                    <span class="text-theme"> Campus:</span>
                                                    {{ $challenge->campus }}
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="my-4">
                                        <div class="add-to-cart-blk">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>Email candidature</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a class="btn btn-success btn-lg mt-4 d-block text-light"><span
                                                            class="mr-2 fa fa-envelope"></span> {{ $challenge->email }}</a>

                                                    <div class="modal" id="myModal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Envoyer ma candidature:</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;
                                                                    </button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <form method="post"
                                                                          action=""
                                                                          enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-group mb-3">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" name="email"
                                                                                   class="form-control"
                                                                                   value="{{ Auth::guard('city')->user()->email }}">
                                                                            <input type="hidden" name="id_job"
                                                                                   class="form-control"
                                                                                   value="{{ $challenge->id }}">
                                                                            <input type="hidden" name="id_recruteur"
                                                                                   class="form-control"
                                                                                   value="{{ $challenge->id_user }}">

                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <label for="pwd">Upload CV:</label>
                                                                            <input type="file" class="form-control"
                                                                                   name="cv" required>
                                                                        </div>
                                                                        <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal">Annuler
                                                                        </button>
                                                                        <button type="submit" class="btn btn-success">
                                                                            Postuler
                                                                        </button>
                                                                    </form>
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <hr class="my-4">

                                        </div>
                                    </div>


                                    <div class="share-info-card bg-white mt-4 p-4">
                                        <span data-feather="share-2" class="text-theme mr-3"></span>
                                        <h5 class="text-grey d-inline-block align-middle">Partager le challenge</h5>
                                        <hr class="my-4">
                                        <ul class="list-inline social-share-list">
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-twitter valign"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-google valign"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-linkedin valign"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
