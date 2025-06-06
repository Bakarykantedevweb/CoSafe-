@extends('layouts.territory')
@section('content')
    <style>
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
        <div class="row justify-content-center"> <!-- Centrage de la row -->
            <div class="col-lg-8 col-md-10 col-12 text-center"> <!-- Colonne plus étroite et centrée -->
                <!-- Titre principal centré -->
                <div class="border-bottom pb-3 mb-3">
                    <h1 class="mb-0 h2 fw-bold">Signaler un incident </h1>
                    <p class="mt-2 text-center">Vous êtes témoin ou victime d’un incident ?</p>
                    <p class="mt-2">CoSafe vous permet de le signaler en quelques étapes pour alerter la communauté et, si
                        nécessaire, les autorités compétentes. Votre vigilance contribue à la sécurité de tous.</p>
                </div>

                <!-- Section "Comment ça marche" centrée -->
                <div class="mb-4 text-start"> <!-- text-start pour aligner le texte à gauche à l'intérieur -->
                    <h2 class="h4 fw-bold text-center">Pourquoi signaler un incident ?</h2> <!-- Titre centré -->
                    <ul class="list-unstyled ps-0 ms-0">
                        <li class="mb-2"><span class="text-success me-2">✅ </span> Prévenir les habitants et les forces de
                            l’ordre en temps réel.</li>
                        <li class="mb-2"><span class="text-success me-2">✅ </span> Renforcer la sécurité collective avec
                            des informations utiles.</li>
                        <li><span class="text-success me-2">✅ </span> Limiter les risques en aidant à identifier les
                            menaces.</li>
                    </ul>
                    <br>
                    <p class="text-center">Comment signaler un incident ?</p>
                    <p class="mt-2 text-center">Remplissez le formulaire ci-dessous avec les informations suivantes :
                        Seul votre pseudo apparaitra publiquement
                    </p>
                </div>
            </div>
        </div>

        <!-- Le reste du code (tableau) reste inchangé -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Tableau de recherche -->
                <div class="card mb-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <!-- ... contenu du tableau ... -->
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Pseudo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Les lignes seront ajoutées dynamiquement ici -->
                                    </tbody>
                                </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid p-4">
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-12 col-xl-12 col-md-12 col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body p-lg-6">
                            <!-- form -->
                            <form method="POST" action="{{ url('territory/reports/create') }}" enctype="multipart/form-data"
                                class="row gx-3 needs-validation">
                                @csrf
                                @method('POST')
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Géolocalisez le lieu de l’incident
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="latitude" id="latitude" class="form-control" required />
                                </div>
                                <!-- form group -->

                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Date et heure
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="datetime-local" name="date_heure" class="form-control" required />
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="" rows="3" required></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">
                                        Ajout de preuves (photos, vidéos, témoignages)
                                    </label>
                                    <input type="file" name="photo" class="form-control" multiple />
                                </div>
                                <!-- form group -->

                                <div class="col-md-8"><label class="form-label">
                                        Catégorie de l’incident
                                    </label></div>
                                <div class="row">
                                    <div class="card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">1. Violences faites aux femmes</div>
                                        <div>
                                            <input type="checkbox" id="harcelement" name="categories[]"
                                                value="Harcèlement de rue">
                                            <label for="harcelement">Harcèlement de rue</label><br>

                                            <input type="checkbox" id="agressions" name="categories[]"
                                                value="Agressions physiques et sexuelles">
                                            <label for="agressions">Agressions physiques et sexuelles</label><br>

                                            <input type="checkbox" id="violences_conjugales" name="categories[]"
                                                value="Violences conjugales">
                                            <label for="violences_conjugales">Violences conjugales</label><br>

                                            <input type="checkbox" id="racisme_ethnique" name="categories[]"
                                                value="Racisme et discriminations ethniques">
                                            <label for="racisme_ethnique">Racisme et discriminations ethniques</label><br>

                                            <input type="checkbox" id="mariage_forcé" name="categories[]"
                                                value="Mariage forcé et mutilations sexuelles">
                                            <label for="mariage_forcé">Mariage forcé et mutilations sexuelles</label><br>
                                        </div>
                                    </div>

                                    <!-- Violences minorités & discriminations -->
                                    <div class=" card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">2. Violences minorités &
                                            discriminations</div><br>
                                        <div>
                                            <input type="checkbox" id="homophobie" name="categories[]"
                                                value="Homophobie et transphobie">
                                            <label for="homophobie">Homophobie et transphobie</label><br>

                                            <input type="checkbox" id="racisme_ethnique_minorites" name="categories[]"
                                                value="Racisme et discriminations ethniques">
                                            <label for="racisme_ethnique_minorites">Racisme et discriminations
                                                ethniques</label><br>

                                            <input type="checkbox" id="discriminations_religieuses" name="categories[]"
                                                value="Discriminations religieuses">
                                            <label for="discriminations_religieuses">Discriminations
                                                religieuses</label><br>

                                            <input type="checkbox" id="discriminations_handicapes" name="categories[]"
                                                value="Discriminations contre les personnes handicapées">
                                            <label for="discriminations_handicapes">Discriminations contre les personnes
                                                handicapées</label><br>
                                        </div>
                                    </div>

                                    <div class="card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">3. Violences physiques & agressions
                                        </div><br>
                                        <div>
                                            <input type="checkbox" id="rixes" name="categories[]"
                                                value="Rixes et bagarres">
                                            <label for="rixes">Rixes et bagarres</label><br>

                                            <input type="checkbox" id="agressions_gratuites" name="categories[]"
                                                value="Agressions gratuites ou ciblées">
                                            <label for="agressions_gratuites">Agressions gratuites ou ciblées</label><br>

                                            <input type="checkbox" id="armes_blanches" name="categories[]"
                                                value="Usage d’armes blanches ou à feu">
                                            <label for="armes_blanches">Usage d’armes blanches ou à feu</label><br>

                                            <input type="checkbox" id="kidnapping" name="categories[]"
                                                value="Tentatives de kidnapping et enlèvements">
                                            <label for="kidnapping">Tentatives de kidnapping et enlèvements</label><br>

                                            <input type="checkbox" id="vehicules_suspects" name="categories[]"
                                                value="Signalement de véhicules suspects aux abords des écoles">
                                            <label for="vehicules_suspects">Signalement de véhicules suspects aux abords
                                                des écoles</label><br>
                                        </div>
                                    </div>
                                </div>

                                <!-- Violences physiques & agressions -->



                                <!-- Autres catégories -->

                                <!-- Sécurité des Biens et Vols -->
                                <div class="row">
                                    <div class="card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">4. Sécurité des Biens et Vols</div>
                                        <br>
                                        <div>
                                            <input type="checkbox" id="intrusions" name="categories[]"
                                                value="Intrusions illégales">
                                            <label for="intrusions">Intrusions illégales</label><br>

                                            <input type="checkbox" id="cambriolages" name="categories[]"
                                                value="Cambriolages avec et effractions">
                                            <label for="cambriolages">Cambriolages avec et effractions</label><br>

                                            <input type="checkbox" id="vols_commerces" name="categories[]"
                                                value="Vols dans les commerces">
                                            <label for="vols_commerces">Vols dans les commerces</label><br>

                                            <input type="checkbox" id="vols_arraché" name="categories[]"
                                                value="Vols à l’arraché et pickpockets">
                                            <label for="vols_arraché">Vols à l’arraché et pickpockets</label><br>

                                            <input type="checkbox" id="degats_volontaires" name="categories[]"
                                                value="Dégradations volontaires ciblées">
                                            <label for="degats_volontaires">Dégradations volontaires ciblées</label><br>
                                        </div>
                                    </div>
                                    <!-- Criminalité et Menaces -->
                                    <div class="card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">5. Criminalité et Menaces</div><br>
                                        <div>
                                            <input type="checkbox" id="trafic_drogues" name="categories[]"
                                                value="Trafic de drogues & stupéfiants">
                                            <label for="trafic_drogues">Trafic de drogues & stupéfiants</label><br>

                                            <input type="checkbox" id="actes_terrorisme" name="categories[]"
                                                value="Actes de terrorisme">
                                            <label for="actes_terrorisme">Actes de terrorisme</label><br>

                                            <input type="checkbox" id="recrutement_radicalisation" name="categories[]"
                                                value="Recrutement & radicalisation">
                                            <label for="recrutement_radicalisation">Recrutement &
                                                radicalisation</label><br>

                                            <input type="checkbox" id="violences_abus_policier" name="categories[]"
                                                value="Violences & abus policiers">
                                            <label for="violences_abus_policier">Violences & abus policiers</label><br>

                                            <input type="checkbox" id="incivilites_scolaire" name="categories[]"
                                                value="Incivilités en milieu scolaire">
                                            <label for="incivilites_scolaire">Incivilités en milieu scolaire</label><br>
                                        </div>
                                    </div>
                                    <div class="card mb-3 col-md-4">
                                        <div class="card-header bg-primary text-white">6. Incivilités et Troubles</div><br>
                                        <div>
                                            <input type="checkbox" id="degats_urbains" name="categories[]"
                                                value="Dégradations & insalubrité urbaine">
                                            <label for="degats_urbains">Dégradations & insalubrité urbaine</label><br>

                                            <input type="checkbox" id="nuisances_voisinage" name="categories[]"
                                                value="Nuisances et troubles voisinage">
                                            <label for="nuisances_voisinage">Nuisances et troubles voisinage</label><br>

                                            <input type="checkbox" id="stationnement" name="categories[]"
                                                value="Stationnement et infractions">
                                            <label for="stationnement">Stationnement et infractions</label><br>

                                            <input type="checkbox" id="incivilites_commerces" name="categories[]"
                                                value="Incivilités dans les commerces">
                                            <label for="incivilites_commerces">Incivilités dans les commerces</label><br>

                                            <input type="checkbox" id="comportements_antisociaux" name="categories[]"
                                                value="Comportements antisociaux transports">
                                            <label for="comportements_antisociaux">Comportements antisociaux
                                                transports</label><br>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Destinataires du signalement</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-check">
                                        <input class="form-check-input" type="checkbox" name="destinataires[]"
                                            value="Campus Angel"> Campus Angel
                                    </div>
                                    <div class=" col-md-4 form-check">
                                        <input class="form-check-input" type="checkbox" name="destinataires[]"
                                            value="Promoteur"> Promoteur de territoires
                                    </div>
                                    <div class="  col-md-4 form-check">
                                        <input class="form-check-input" type="checkbox" name="destinataires[]"
                                            value="Commerces"> Commerces & Entreprises
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Partager via vos réseaux sociaux</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]"
                                            value="TikTok"> TikTok
                                    </div>
                                    <div class="col-md-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]"
                                            value="Instagram"> Instagram
                                    </div>
                                    <div class="col-md-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]"
                                            value="Facebook"> Facebook
                                    </div>
                                    <div class=" col-md-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="partage_reseaux[]"
                                            value="X"> X
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Souhaitez-vous que ce signalement soit partagé avec les
                                        autorités ?</label>
                                    <select class="form-select" name="partage_autorites">
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                </div>
                                <div id="map"></div>

                                <!-- button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-outline-primary ms-2"
                                        data-bs-dismiss="offcanvas" aria-label="Close">
                                        Close
                                    </button>
                                </div>






                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Initialisation de la carte Leaflet
        var map = L.map('map').setView([48.8566, 2.3522], 13); // Paris par défaut

        // Ajouter un fond de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);


        // Ajouter un marqueur draggable
        var marker = L.marker([48.8566, 2.3522], {
            draggable: true
        }).addTo(map);

        var popup = L.popup();

        function onMapClick(e) {

            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.lat)
                .openOn(map);
        }

        map.on('click', onMapClick);
        // Mise à jour des coordonnées lors du déplacement du marqueur
        marker.on('dragend', function(e) {
            alert("hghhjhj");
            var latlng = marker.getLatLng();

            document.getElementById('latitude').value = latlng.lat;
            document.getElementById('longitude').value = latlng.lng;
        });

        // Mettre à jour le marqueur quand une adresse est saisie (nécessite une API de géocodage)
    </script>
@endsection
