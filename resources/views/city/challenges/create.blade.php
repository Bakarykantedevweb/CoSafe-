@extends('layouts.city')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Ajouter un Challenge</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('city/challenges') }}" class="btn btn-primary">Retour</a>
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
                        <form method="POST" action="{{ url('city/challenges/create') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-3">

                                <div class="alert alert-secondary">
                                    <h3 class="text-center"><i class="bi bi-card-checklist"></i> Identification du promoteur
                                        du challenge</h3>
                                    <p style="text-align: center;">Veuillez décrire les différentes informations du
                                        promoteur du challenge.</p>
                                </div>

                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-person-badge"></i> Informations personnelles
                                        contact</h4>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Nom & prénom</label>
                                    <input class="form-control" type="text" name="nom">
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Adresse email</label>
                                    <input class="form-control" type="email" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Numéro de téléphone</label>
                                    <input class="form-control" type="text" name="numero">
                                    @error('numero')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-geo"></i> Localisation</h4>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Pays</label>
                                    <input class="form-control" type="text" name="pays">
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
                                    <input class="form-control" type="text" name="ville">
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

                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-info-square"></i> Informations sur le
                                        challenge</h4>
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

                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Types de challenges proposés </label>
                                    <select class="form-select" name="type">
                                        <option value="Soutenir la jeunesse">Soutenir la jeunesse</option>
                                        <option value="Agir contre la précarité des étudiants.es">Agir contre la précarité
                                            des étudiants.es</option>
                                        <option value="Soutenir les seniors">Soutenir les seniors</option>
                                        <option value="Agir pour l'environnement & la planète">Agir pour l'environnement &
                                            la planète</option>
                                        <option value="Agir contre la pauvreté">Agir contre la pauvreté</option>
                                        <option value="Agir pour l'égalité sociale et des genres">Agir pour l'égalité
                                            sociale et des genres</option>
                                        <option value="Agir pour la prévention sociale">Agir pour la prévention sociale
                                        </option>
                                        <option value="Agir contre l'isolement">Agir contre l'isolement</option>
                                        <option value="Agir pour l'économie locale">Agir pour l'économie locale</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Secteurs d’activités concernés </label>
                                    <select class="form-select" name="secteurs">
                                        <option value="agriculture">Agriculture, sylviculture et pêche</option>
                                        <option value="industrie-extractive">Industrie extractive</option>
                                        <option value="industrie-manufacturiere">Industrie manufacturière</option>
                                        <option value="energie-eau-dechets">Production et distribution d’électricité, gaz,
                                            vapeur, air conditionné, eau, assainissement & gestion des déchets</option>
                                        <option value="commerce-reparation">Commerce et réparation de véhicules automobiles
                                            et motocycles</option>
                                        <option value="transport">Transport et entreposage</option>
                                        <option value="hebergement-restauration">Hébergement et restauration</option>
                                        <option value="information-communication">Information et communication</option>
                                        <option value="finance-assurance">Activités financières et d’assurance</option>
                                        <option value="immobilier">Activités immobilières</option>
                                        <option value="services-techniques">Activités spécialisées, techniques et
                                            scientifiques</option>
                                        <option value="services-administratifs">Activités de services administratives et de
                                            soutien</option>
                                        <option value="administration-publique">Administration publique</option>
                                        <option value="enseignement">Enseignement</option>
                                        <option value="sante-action-sociale">Santé humaine et action sociale</option>
                                        <option value="arts-spectacles">Arts, spectacles et activités récréatives</option>
                                    </select>
                                    @error('secteurs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-12 mb-3">
                                    <label>Description du challenge:</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="">Fichier explicatif</label>
                                        <input class="form-control" type="file" accept=".docx" name="fichier"
                                            aria-label="file example">
                                        @error('fichier')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Critères de sélection</label>
                                    <input class="form-control" type="text" name="critere">
                                    @error('critere')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="">Conditions particulières du challenge</label>
                                        <input class="form-control" type="file" accept=".docx" name="conditions"
                                            aria-label="file example">
                                        @error('conditions')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 mb-3">
                                    <label>Dotation & Objet du challenge (A gagner):</label>
                                    <textarea class="form-control" rows="5" name="dotation"
                                        placeholder="Description de la contrepartie proposée :  Badge à gagner – Bons d’achat – Services ou marchandises …"></textarea>
                                    @error('dotation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-geo-alt"></i> Géolocalisation du challenge
                                    </h4>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="">Pays</label>
                                    <input class="form-control" type="text" name="payschallenge">
                                    @error('payschallenge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="">Ville</label>
                                    <input class="form-control" type="text" name="villechallenge">
                                    @error('villechallenge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label" for="">Campus</label>
                                    <input class="form-control" type="text" name="campus">
                                    @error('campus')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Date de lancement</label>
                                    <input class="form-control" type="date" name="datelancement">
                                    @error('datelancement')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Dates de clotûre</label>
                                    <input class="form-control" type="date" name="datecloture">
                                    @error('datecloture')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="checkbox" name="accepte_conditions" value="1">
                                    <label for="accepte_conditions">J'accepte les conditions générales et termes de la
                                        plateforme.</label>
                                    @error('accept_conditions')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                </div>

                                <div class="col-md-4 mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">PUBLIER LE CHALLENGE</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Sélectionnez les champs du formulaire
        var champs = document.querySelectorAll('#monFormulaire input');
        var conditions = document.getElementById('accepte_conditions');
        var bouton = document.getElementById('monBouton');

        // Fonction pour vérifier l'état de remplissage des champs
        function verifierRemplissage() {
            var tousRemplis = true;

            champs.forEach(function(champ) {
                if (champ.value.trim() === '') {
                    tousRemplis = false;
                }
            });

            if (tousRemplis && conditions.checked) {
                bouton.removeAttribute('disabled');
            } else {
                bouton.setAttribute('disabled', 'disabled');
            }
        }
    </script>
@endsection
