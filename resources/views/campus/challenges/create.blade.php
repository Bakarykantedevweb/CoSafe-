@extends('layouts.campus')
@section('content')
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .container2 {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            max-width: 1200px;
            width: 100%;
        }

        /* Adaptation pour tablettes (moins de 1200px) */
        @media (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(3, 1fr);
                /* 3 colonnes */
            }

            .container2 {
                grid-template-columns: repeat(5, 1fr);
                /* 3 colonnes */
            }
        }

        /* Adaptation pour mobiles (moins de 768px) */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
                /* 2 colonnes */
            }

            .container2 {
                grid-template-columns: repeat(3, 1fr);
                /* 3 colonnes */
            }
        }

        /* Adaptation pour petits écrans (moins de 480px) */
        @media (max-width: 480px) {
            .container {
                grid-template-columns: repeat(1, 1fr);
                /* 1 colonne (affichage en liste) */
                padding: 0px;
            }

            .container2 {
                grid-template-columns: repeat(1, 1fr);
                /* 3 colonnes */
                padding: 0px;
            }
        }

        .column {
            background: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
        }

        .column2 {
            background: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            background: #ccc;
            padding: 10px;
            border-radius: 8px;
        }

        ul {
            padding: 0;
            list-style-type: none;
        }

        li {
            padding: 5px 0;
        }
    </style>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Ajouter un Challenge</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('campus/challenges') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <style>
                h5>i {
                    font-size: 20px;
                }
            </style>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5><i class="bi bi-pencil-square"></i> Créer un challenge</h5>
                        <a href="" class="btn btn-primary">Mes Campus Challenges</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('campus/challenges/create') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-3">

                                <!-- Section Promoteur (conservée de votre formulaire original) -->
                                <div class="alert alert-secondary">
                                    <h3 class="text-center"><i class="bi bi-card-checklist"></i> Identification du promoteur
                                        du challenge</h3>
                                    <p style="text-align: center;">Veuillez décrire les différentes informations du
                                        promoteur du challenge.</p>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="alert alert-secondary">
                                        <h4 class="text-secondary"><i class="bi bi-person-badge"></i> Informations
                                            personnelles contact</h4>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="">Nom & prénom</label>
                                        <input class="form-control" type="text" name="nom">
                                        @error('nom')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="">Adresse email</label>
                                        <input class="form-control" type="email" name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="">Numéro de téléphone</label>
                                        <input class="form-control" type="text" name="numero">
                                        @error('numero')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row g-3">
                                        <div class="alert alert-secondary">
                                            <h4 class="text-secondary"><i class="bi bi-geo"></i> Localisation</h4>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Pays</label>
                                            <select class="form-control" name="pays" id="pays">
                                                <option value="France">France</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Belgique">Belgique</option>
                                            </select>
                                            @error('pays')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Région</label>
                                            <input class="form-control" type="text" name="region">
                                            @error('region')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Ville</label>
                                            <select id="ville" name="ville"
                                                class="form-control col-sm-12" required>
                                                @foreach ($villes_frances as $v)
                                                    <option data-option="France" value="{{ $v }}">
                                                        {{ $v }}</option>
                                                @endforeach
                                                @foreach ($villes_luxembourg as $v)
                                                    <option data-option="Luxembourg" value="{{ $v }}">
                                                        {{ $v }}</option>
                                                @endforeach
                                                @foreach ($villes_belgique as $v)
                                                    <option data-option="Belgique" value="{{ $v }}">
                                                        {{ $v }}</option>
                                                @endforeach
                                            </select>
                                            @error('ville')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Code postal</label>
                                            <input class="form-control" type="text" name="codepostal">
                                            @error('codepostal')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="">Adresse</label>
                                            <input class="form-control" type="text" name="adresse">
                                            @error('adresse')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Section Entreprise (conservée de votre formulaire original) -->
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-geo"></i> Informations complémentaires (si vous êtes une entreprise)</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control" id="nomcommercial"
                                            name="nomcommercial" placeholder="Nom commercial" value="">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control" id="numeroentreprise"
                                            name="numeroentreprise" placeholder="N° d'entreprise" value="">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control" name="numeroagreation"
                                            placeholder="N° d'agréation" value="">
                                    </div>

                                    <div class="col-lg-6 mb-4">
                                        <select id="typesactivite" name="typesactivite[]" multiple
                                            class="form-control form-select typesActiviteSelect2">
                                            <option value="Aides au quotidien">Aides au quotidien</option>
                                            <option value="Aides aux personnes">Aides aux personnes</option>
                                            <option value="Enfants &amp; Soutiens scolaires">Enfants &amp; Soutiens
                                                scolaires</option>
                                            <option value="Espaces verts">Espaces verts</option>
                                            <option value="Expertises">Expertises</option>
                                            <option value="Facility managements">Facility managements</option>
                                            <option value="Horeca &amp; Loisirs">Horeca &amp; Loisirs</option>
                                            <option value="Maisons &amp; Jardins">Maisons &amp; Jardins</option>
                                            <option value="Nettoyages">Nettoyages</option>
                                            <option value="Travaux &amp; Réparations">Travaux &amp; Réparations</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Date début d'activité</label>
                                        <input type="date" min="2025-03-18" class="form-control"
                                            id="datedebutinscription" name="datedebutinscription" value=""
                                            required>
                                    </div>

                                    <div class="col-12 col-md-12 mb-3">
                                        <label>Description complémentaire éventuelle :</label>
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Section Challenge (intégration des éléments du formulaire HelloCampus) -->
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-info-square"></i> Informations du Challenge
                                    </h4>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Nom du challenge</label>
                                    <input class="form-control" type="text" name="nomchallenge">
                                    @error('nomchallenge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="">Image représentant le challenge</label>
                                        <input class="form-control" type="file" name="image"
                                            aria-label="file example">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Section Récompense (adaptée du formulaire HelloCampus) -->
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-gift"></i> Récompense du Challenge</h4>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label required">Montant ou valeur du Reward (A gagner)</label>
                                    <input class="form-control" type="text" name="reward_value"
                                        placeholder="500 €, ordinateur portable, etc." required>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="cash_prize"
                                                name="reward_type[]" value="cash_prize">
                                            <label class="form-check-label" for="cash_prize">Prix en espèces</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="savings_percentage"
                                                name="reward_type[]" value="savings_percentage">
                                            <label class="form-check-label" for="savings_percentage">% sur
                                                économies</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="internship_job"
                                                name="reward_type[]" value="internship_job">
                                            <label class="form-check-label" for="internship_job">Stage ou Job</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="visibility"
                                                name="reward_type[]" value="visibility">
                                            <label class="form-check-label" for="visibility">Visibilité</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 mb-3">
                                    <label>Description de la récompense:</label>
                                    <textarea class="form-control" rows="3" name="reward_description"
                                        placeholder="Détails sur ce que le gagnant recevra..."></textarea>
                                </div>

                                <!-- Section Association (adaptée du formulaire HelloCampus) -->
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-heart"></i> Association soutenue
                                        (optionnel)</h4>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nom de l'association</label>
                                        <input class="form-control" type="text" name="association_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Cause soutenue</label>
                                        <input class="form-control" type="text" name="association_cause">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label">Numéro de téléphone</label>
                                        <input class="form-control" type="tel" name="association_phone">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Adresse email</label>
                                        <input class="form-control" type="email" name="association_email">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Site web</label>
                                        <input class="form-control" type="text" name="association_website">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Fichier (logo, présentation)</label>
                                        <input class="form-control" type="file" name="association_file">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Pays</label>
                                        <select class="form-control form-select" name="association_country">
                                            <option value="">Sélectionnez</option>
                                            <option value="France">France</option>
                                            <option value="Belgique">Belgique</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Ville</label>
                                        <input class="form-control" type="text" name="association_city">
                                    </div>
                                </div>

                                <!-- Section Calendrier (fusion des deux formulaires) -->
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-calendar-event"></i> Calendrier du
                                        Challenge</h4>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label required">Date de lancement</label>
                                        <input class="form-control" type="date" name="start_date" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label required">Date d'expiration</label>
                                        <input class="form-control" type="date" name="end_date" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Date début des inscriptions</label>
                                        <input class="form-control" type="date" name="datedebutinscription">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date fin des inscriptions</label>
                                        <input class="form-control" type="date" name="datefininscription">
                                    </div>
                                </div>

                                <!-- Section Conditions générales -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="accepte_conditions"
                                            value="1" required>
                                        <label class="form-check-label required">J'accepte les conditions générales et
                                            termes de la plateforme.</label>
                                        @error('accepte_conditions')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Bouton de soumission -->
                                <div class="col-md-12 mb-3 text-center">
                                    <button class="btn btn-primary btn-lg" type="submit">PUBLIER LE CHALLENGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div @endsection
