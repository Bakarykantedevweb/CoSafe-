@extends('layouts.admin')
@section('content')
<br><br>
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
                <form id="monFormulaire" method="POST" action=""
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">

                        <div class="alert alert-secondary">
                            <h3 class="text-center"><i class="bi bi-card-checklist"></i> Identification du promoteur du
                                challenge</h3>
                            <p style="text-align: center;">Veuillez décrire les différentes informations du promoteur du
                                challenge.</p>
                        </div>
                        <div class="alert alert-secondary">
                            <h4 class="text-secondary"><i class="bi bi-person-badge"></i> Informations personnelles contact
                            </h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Nom & prénom</label>
                            <input class="form-control" type="text" name="nom" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Adresse email</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Numéro de téléphone</label>
                            <input class="form-control" type="text" name="numero" required>
                        </div>
                        <div class="alert alert-secondary">
                            <h4 class="text-secondary"><i class="bi bi-geo"></i> Localisation</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Pays</label>
                            <input class="form-control" type="text" name="pays" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Région</label>
                            <input class="form-control" type="text" name="region" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Ville</label>
                            <input class="form-control" type="text" name="ville" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Code postal</label>
                            <input class="form-control" type="text" name="codepostal" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Adresse</label>
                            <input class="form-control" type="text" name="adresse" required>
                        </div>
                        <div class="alert alert-secondary">
                            <h4 class="text-secondary"><i class="bi bi-info-square"></i> Informations sur le challenge</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Nom du challenge</label>
                            <input class="form-control" type="text" name="nomchallenge" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="">Image représentant le challenge</label>
                                <input class="form-control" type="file" name="image" aria-label="file example"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label" for="">Types de challenges proposés </label>
                            <select class="form-select" name="type" required>
                                <option>Soutenir la jeunesse</option>
                                <option>Agir contre la précarité des étudiants.es</option>
                                <option>Soutenir les seniors</option>
                                <option>Agir pour l'environnement & la planète</option>
                                <option>Agir contre la pauvreté </option>
                                <option>Agir pour l'égalité sociale et des genres</option>
                                <option>Agir pour la prévention sociale</option>
                                <option>Agir contre l'isolement</option>
                                <option>Agir pour l'économie locale</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label" for="">Secteurs d’activités concernés </label>
                            <select class="form-select" name="secteurs" required>
                                <option>Agriculture- sylviculture et pêche</option>
                                <option>Industrie extractive</option>
                                <option>Industrie manufacturière</option>
                                <option>Production et distribution d’électricité, gaz, vapeur et d’air conditionné,
                                    production eau, assainissement & gestion déchets</option>
                                <option>Commerce réparation véhicules automobiles et motocycles</option>
                                <option>Transport et entreposage</option>
                                <option>Hébergements & restauration</option>
                                <option>Information & communication</option>
                                <option>Activités financières et d’assurance</option>
                                <option>Activités immobilières</option>
                                <option>Activités spécialisées, techniques et scientifiques</option>
                                <option>Activités de services administratives et de soutiens</option>
                                <option>Administration publique</option>
                                <option>Enseignement</option>
                                <option>Santé humaine et action sociale</option>
                                <option>Arts, spectacles et activités récréatives</option>

                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label>Description du challenge:</label>
                            <textarea class="form-control" rows="5" name="description"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="">Fichier explicatif</label>
                                <input class="form-control" type="file" accept=".docx" name="fichier"
                                    aria-label="file example" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Critères de sélection</label>
                            <input class="form-control" type="text" name="critere" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="">Conditions particulières du challenge</label>
                                <input class="form-control" type="file" accept=".docx" name="conditions"
                                    aria-label="file example" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label>Dotation & Objet du challenge (A gagner):</label>
                            <textarea class="form-control" rows="5" name="dotation"
                                placeholder="Description de la contrepartie proposée :  Badge à gagner – Bons d’achat – Services ou marchandises …  "
                                required></textarea>
                        </div>
                        <div class="alert alert-secondary">
                            <h4 class="text-secondary"><i class="bi bi-geo-alt"></i> Géolocalisation du challenge </h4>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Pays</label>
                            <input class="form-control" type="text" name="payschallenge" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Ville</label>
                            <input class="form-control" type="text" name="villechallenge" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Campus</label>
                            <input class="form-control" type="text" name="campus" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Date de lancement</label>
                            <input class="form-control" type="date" name="datelancement" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Dates de clotûre</label>
                            <input class="form-control" type="date" name="datecloture" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="checkbox" name="conditions" id="conditions" required>
                            <label for="conditions">J'accepte les conditions générales et termes de la plateforme.</label>

                        </div>
                        <div class="col-md-4 mb-3">
                        </div>
                        <div class="col-md-4 mb-3text-center">
                            <button class="btn btn-primary btn-block" type="submit" id="monBouton" disabled>PUBLIER LE
                                CHALLENGE</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        // Sélectionnez les champs du formulaire
        var champs = document.querySelectorAll('#monFormulaire input');
        var conditions = document.getElementById('conditions');
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

        // Ajoutez des écouteurs d'événements 'input' et 'change' pour vérifier l'état
        champs.forEach(function(champ) {
            champ.addEventListener('input', verifierRemplissage);
        });

        conditions.addEventListener('change', verifierRemplissage);
    </script>
@endsection
