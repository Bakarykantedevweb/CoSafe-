@extends('layouts.business')
@section('content')
    <style>
        h2 {
            color: #2c3e50;
            font-size: 30px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        section {
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .form-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .form-container div {
            flex: 1 1 48%;
        }

        label {}
    </style>
    <section class="container-fluid p-4">
        <h2 class="mb-3">Déclarer un Besoin</h2>
        <p class="mt-2 text-center">Vous avez besoin d'une aide ou d'un soutien</p>
        <div class="container card mt-4">
            <form action="{{ url('city/reports/posterbesoin') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3 mt-2">
                    <label class="form-label">Nom du besoin</label>
                    <input type="text" class="form-control" name="nom_besoin" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description du besoin</label>
                    <textarea class="form-control" name="description" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ajout de fichier descriptif</label>
                    <input type="file" class="form-control" name="fichier1">
                    <input type="file" class="form-control mt-2" name="fichier2">
                    <input type="file" class="form-control mt-2" name="fichier3">
                </div>

                <div class="row">
                    <!-- Aide en cas d’urgence -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-danger text-white">Aide en cas d’urgence</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="urgence1">
                                    <label class="form-check-label" for="urgence1">Escorte sécurisée pour rentrer chez
                                        soi</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="urgence2">
                                    <label class="form-check-label" for="urgence2">Aide après une agression ou
                                        incident</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="urgence3">
                                    <label class="form-check-label" for="urgence3">Recherche de témoins pour un fait</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="urgence4">
                                    <label class="form-check-label" for="urgence4">Alerte en cas de danger imminent</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soutien aux victimes & Accompagnement -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">Soutien aux victimes & Accompagnement</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="soutien1">
                                    <label class="form-check-label" for="soutien1">Assistance psychologique ou
                                        juridique</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="soutien2">
                                    <label class="form-check-label" for="soutien2">Partage d’expériences &
                                        témoignages</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="soutien3">
                                    <label class="form-check-label" for="soutien3">Aide aux démarches après un
                                        incident</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" id="soutien4">
                                    <label class="form-check-label" for="soutien4">Soutien moral et écoute pour les
                                        victimes</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vigilance collective des quartiers -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white">Vigilance collective des quartiers</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="vigilance1">
                                    <label class="form-check-label" for="vigilance1">Mise en place d’une veille
                                        citoyenne</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="vigilance2">
                                    <label class="form-check-label" for="vigilance2">Signalement d’une zone à
                                        risque</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="vigilance3">
                                    <label class="form-check-label" for="vigilance3">Demande de sécurisation d’un
                                        lieu</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="vigilance4">
                                    <label class="form-check-label" for="vigilance4">Organisation de patrouilles
                                        citoyennes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Protection des biens & commerces -->
                    <div class="card col-md-4">
                        <div class="card-header bg-danger text-white">Protection des biens & commerces</div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option1" name="categories[]"
                                    value="Surveillance domicile ou commerce">
                                <label class="form-check-label" for="option1">Surveillance domicile ou commerce</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option2" name="categories[]"
                                    value="Conseil pour mieux sécuriser un lieu">
                                <label class="form-check-label" for="option2">Conseil pour mieux sécuriser un
                                    lieu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option3" name="categories[]"
                                    value="Partage d’alertes sur des cambriolages">
                                <label class="form-check-label" for="option3">Partage d’alertes sur des
                                    cambriolages</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option4" name="categories[]"
                                    value="Demande d’aide après une dégradation">
                                <label class="form-check-label" for="option4">Demande d’aide après une
                                    dégradation</label>
                            </div>
                        </div>
                    </div>

                    <!-- Signalement de menaces et comportements -->
                    <div class="card col-md-4">
                        <div class="card-header bg-primary text-white">Signalement de menaces et comportements</div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option5" name="categories[]"
                                    value="Alerte véhicule ou présence suspect">
                                <label class="form-check-label" for="option5">Alerte véhicule ou présence suspect</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option6" name="categories[]"
                                    value="Demande d’infos sur des harcèlement répétés">
                                <label class="form-check-label" for="option6">Demande d’infos sur des harcèlement
                                    répétés</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option7" name="categories[]"
                                    value="Signalement de comportements dangereux">
                                <label class="form-check-label" for="option7">Signalement de comportements
                                    dangereux</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option8" name="categories[]"
                                    value="Recherche d’identification d’auteur d’incivilité">
                                <label class="form-check-label" for="option8">Recherche d’identification d’auteur
                                    d’incivilité</label>
                            </div>
                        </div>
                    </div>

                    <!-- Prévention et engagement citoyen -->
                    <div class="card col-md-4">
                        <div class="card-header bg-success text-white">Prévention et engagement citoyen</div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option9" name="categories[]"
                                    value="Sensibilisation aux violences, incivilités">
                                <label class="form-check-label" for="option9">Sensibilisation aux violences,
                                    incivilités</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option10" name="categories[]"
                                    value="Formation à la sécurité, self-défense">
                                <label class="form-check-label" for="option10">Formation à la sécurité,
                                    self-défense</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option11" name="categories[]"
                                    value="Mobiliser & renforcer la vigilance collective">
                                <label class="form-check-label" for="option11">Mobiliser & renforcer la vigilance
                                    collective</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="option12" name="categories[]"
                                    value="Promotion d’un comportement civique">
                                <label class="form-check-label" for="option12">Promotion d’un comportement civique</label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Géolocalisation</label>
                    <input type="text" class="form-control" name="geolocalisation"
                        placeholder="Adresse ou zone approximative" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Date et heure</label>
                    <input type="datetime-local" class="form-control" name="date_heure" required>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Budget & financement</label>
                </div>
                <div class="row">
                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="pas_de_budget"
                            value="pas_de_budget">
                        <label class="form-check-label" for="pas_de_budget">Pas de budget</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="moins_50" value="moins_50">
                        <label class="form-check-label" for="moins_50">- de 50€</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="50_100" value="50_100">
                        <label class="form-check-label" for="50_100">Entre 50 & 100€</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="100_250" value="100_250">
                        <label class="form-check-label" for="100_250">Entre 100 & 250€</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="plus_250" value="plus_250">
                        <label class="form-check-label" for="plus_250">Plus de 250€</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="1000_plus" value="1000_plus">
                        <label class="form-check-label" for="1000_plus">1000€ et plus</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="assume" value="assume">
                        <label class="form-check-label" for="assume">J’assume le financement</label>
                    </div>

                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="budget" id="service_social"
                            value="service_social">
                        <label class="form-check-label" for="service_social">Je fais appel à un service social</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Destinataires du signalement</label>
                </div>
                <div class="row">
                    <div class="col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="destinataires[]" value="Campus Angel">
                        Campus Angel
                    </div>
                    <div class=" col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="destinataires[]" value="Promoteur">
                        Promoteur de territoires
                    </div>
                    <div class="  col-md-4 form-check">
                        <input class="form-check-input" type="checkbox" name="destinataires[]" value="Commerces">
                        Commerces & Entreprises
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Partager via vos réseaux sociaux</label>
                </div>
                <div class="row">
                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]" value="TikTok"> TikTok
                    </div>
                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]" value="Instagram">
                        Instagram
                    </div>
                    <div class="col-md-3 form-check">
                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]" value="Facebook">
                        Facebook
                    </div>
                    <div class=" col-md-3 form-check">
                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]" value="X"> X
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Partager avec les autorités ?</label>
                    <select class="form-select" name="partage_autorites">
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </section>
@endsection
