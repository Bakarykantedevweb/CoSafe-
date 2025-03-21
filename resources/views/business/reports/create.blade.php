@extends('layouts.business')
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
        label {

        }


    </style>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Ajouter un Signalement</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('business/reports') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-12 col-xl-12 col-md-12 col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body p-lg-6">
                            <!-- form -->
                            <form method="POST" action="{{ url('business/reports/create') }}" enctype="multipart/form-data" class="row gx-3 needs-validation">
                                @csrf
                                @method('POST')

                                <!-- form group -->
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Categorie
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="categorie" class="form-select" id="">
                                        <option value="">---</option>
                                        <option value="Violence">Violence</option>
                                        <option value="Dégradation">Dégradation</option>
                                        <option value="Nuisance">Nuisance</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Date et heure
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="datetime-local" name="title" class="form-control" required />
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="" rows="3" required></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">
                                    Ajout de preuves (photos, vidéos, témoignages)
                                    </label>
                                    <input type="file" name="photo" class="form-control" />
                                </div>
                                <!-- form group -->

                                <div class="col-md-8"></div>
                                <div class="row">
            <div class="card mb-3 col-4">
                <label>1. Violences faites aux femmes</label>
                <div class="card-body">
                <input type="checkbox" id="harcelement" name="violences_femmes" value="Harcèlement de rue">
                <label for="harcelement">Harcèlement de rue</label><br>

                <input type="checkbox" id="agressions" name="violences_femmes" value="Agressions physiques et sexuelles">
                <label for="agressions">Agressions physiques et sexuelles</label><br>

                <input type="checkbox" id="violences_conjugales" name="violences_femmes" value="Violences conjugales">
                <label for="violences_conjugales">Violences conjugales</label><br>

                <input type="checkbox" id="racisme_ethnique" name="violences_femmes" value="Racisme et discriminations ethniques">
                <label for="racisme_ethnique">Racisme et discriminations ethniques</label><br>

                <input type="checkbox" id="mariage_forcé" name="violences_femmes" value="Mariage forcé et mutilations sexuelles">
                <label for="mariage_forcé">Mariage forcé et mutilations sexuelles</label><br>
                </div>
            </div>

            <!-- Violences minorités & discriminations -->
            <div class=" card mb-3 col-4">
                <label>2. Violences minorités & discriminations</label><br>
                <div class="card-body">
                <input type="checkbox" id="homophobie" name="violences_minorites" value="Homophobie et transphobie">
                <label for="homophobie">Homophobie et transphobie</label><br>

                <input type="checkbox" id="racisme_ethnique_minorites" name="violences_minorites" value="Racisme et discriminations ethniques">
                <label for="racisme_ethnique_minorites">Racisme et discriminations ethniques</label><br>

                <input type="checkbox" id="discriminations_religieuses" name="violences_minorites" value="Discriminations religieuses">
                <label for="discriminations_religieuses">Discriminations religieuses</label><br>

                <input type="checkbox" id="discriminations_handicapes" name="violences_minorites" value="Discriminations contre les personnes handicapées">
                <label for="discriminations_handicapes">Discriminations contre les personnes handicapées</label><br>
            </div>
            </div>

            <div class="card mb-3 col-4">
                <label>3. Violences physiques & agressions</label><br>
                <div class="card-body">
                <input type="checkbox" id="rixes" name="violences_agressions" value="Rixes et bagarres">
                <label for="rixes">Rixes et bagarres</label><br>

                <input type="checkbox" id="agressions_gratuites" name="violences_agressions" value="Agressions gratuites ou ciblées">
                <label for="agressions_gratuites">Agressions gratuites ou ciblées</label><br>

                <input type="checkbox" id="armes_blanches" name="violences_agressions" value="Usage d’armes blanches ou à feu">
                <label for="armes_blanches">Usage d’armes blanches ou à feu</label><br>

                <input type="checkbox" id="kidnapping" name="violences_agressions" value="Tentatives de kidnapping et enlèvements">
                <label for="kidnapping">Tentatives de kidnapping et enlèvements</label><br>

                <input type="checkbox" id="vehicules_suspects" name="violences_agressions" value="Signalement de véhicules suspects aux abords des écoles">
                <label for="vehicules_suspects">Signalement de véhicules suspects aux abords des écoles</label><br>
            </div>
            </div>
        </div>

        <!-- Violences physiques & agressions -->



        <!-- Autres catégories -->

            <!-- Sécurité des Biens et Vols -->
            <div class="row">
            <div class="card mb-3 col-4">
                <label>4. Sécurité des Biens et Vols</label><br>
                <class="card-body">
                <input type="checkbox" id="intrusions" name="securite_biens" value="Intrusions illégales">
                <label for="intrusions">Intrusions illégales</label><br>

                <input type="checkbox" id="cambriolages" name="securite_biens" value="Cambriolages avec et effractions">
                <label for="cambriolages">Cambriolages avec et effractions</label><br>

                <input type="checkbox" id="vols_commerces" name="securite_biens" value="Vols dans les commerces">
                <label for="vols_commerces">Vols dans les commerces</label><br>

                <input type="checkbox" id="vols_arraché" name="securite_biens" value="Vols à l’arraché et pickpockets">
                <label for="vols_arraché">Vols à l’arraché et pickpockets</label><br>

                <input type="checkbox" id="degats_volontaires" name="securite_biens" value="Dégradations volontaires ciblées">
                <label for="degats_volontaires">Dégradations volontaires ciblées</label><br>
            </div>

            <!-- Criminalité et Menaces -->
            <div class="card mb-3 col-4">
                <label>5. Criminalité et Menaces</label><br>
                <div class="card-body">
                <input type="checkbox" id="trafic_drogues" name="criminalite_menaces" value="Trafic de drogues & stupéfiants">
                <label for="trafic_drogues">Trafic de drogues & stupéfiants</label><br>

                <input type="checkbox" id="actes_terrorisme" name="criminalite_menaces" value="Actes de terrorisme">
                <label for="actes_terrorisme">Actes de terrorisme</label><br>

                <input type="checkbox" id="recrutement_radicalisation" name="criminalite_menaces" value="Recrutement & radicalisation">
                <label for="recrutement_radicalisation">Recrutement & radicalisation</label><br>

                <input type="checkbox" id="violences_abus_policier" name="criminalite_menaces" value="Violences & abus policiers">
                <label for="violences_abus_policier">Violences & abus policiers</label><br>

                <input type="checkbox" id="incivilites_scolaire" name="criminalite_menaces" value="Incivilités en milieu scolaire">
                <label for="incivilites_scolaire">Incivilités en milieu scolaire</label><br>
            </div>
            </div>
            <div class="card mb-3 col-4">
                <label>6. Incivilités et Troubles</label><br>
                <div class="card-body">
                <input type="checkbox" id="degats_urbains" name="incivilites_troubles" value="Dégradations & insalubrité urbaine">
                <label for="degats_urbains">Dégradations & insalubrité urbaine</label><br>

                <input type="checkbox" id="nuisances_voisinage" name="incivilites_troubles" value="Nuisances et troubles voisinage">
                <label for="nuisances_voisinage">Nuisances et troubles voisinage</label><br>

                <input type="checkbox" id="stationnement" name="incivilites_troubles" value="Stationnement et infractions">
                <label for="stationnement">Stationnement et infractions</label><br>

                <input type="checkbox" id="incivilites_commerces" name="incivilites_troubles" value="Incivilités dans les commerces">
                <label for="incivilites_commerces">Incivilités dans les commerces</label><br>

                <input type="checkbox" id="comportements_antisociaux" name="incivilites_troubles" value="Comportements antisociaux transports">
                <label for="comportements_antisociaux">Comportements antisociaux transports</label><br>
            </div>
            </div>
        </div>


        <div class="col-12 mb-3">
                        <span data-feather="list" class="mr-3 text-theme"></span>
                        <h4 class=" align-middle" style="text-align: center;">Destinataires du signalement </h4>
                    </div>

                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Français"  type="checkbox">Campus Angel
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Néerlandais"  type="checkbox">Promoteur de territoires
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  Commerces & Entreprises
                    </div>
                    <div class="col-12 mb-3">
                        <span data-feather="list" class="mr-3 text-theme"></span>
                        <h4 class=" align-middle" style="text-align: center;">Souhaitez-vous que ce signalement soit partagé via vos réseaux sociaux ? </h4>
                    </div>

                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Français"  type="checkbox">TikTok
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Néerlandais"  type="checkbox"> Instagram
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  Facebook
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  YouTube
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  Snapchat
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  Snapchat
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  WatsApp
                    </div>
                    <div class="col-3 mb-3">
                        <input class="me-2" name="typelangue[]" value="Anglais"  type="checkbox">  Linkedin
                    </div>
                    <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Latitude
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="latitude"  id="latitude" class="form-control" required />
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Longitude
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="longitude" id="longitude" class="form-control" required />
                                </div>
                                <div id="map"></div>

                                <!-- button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas"
                                        aria-label="Close">
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
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <script>
    // Initialisation de la carte Leaflet
    var map = L.map('map').setView([48.8566, 2.3522], 13); // Paris par défaut

    // Ajouter un fond de carte OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);


    // Ajouter un marqueur draggable
    var marker = L.marker([48.8566, 2.3522], { draggable: true }).addTo(map);

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
    marker.on('dragend', function (e) {
        alert("hghhjhj");
        var latlng = marker.getLatLng();

        document.getElementById('latitude').value = latlng.lat;
        document.getElementById('longitude').value = latlng.lng;
    });

    // Mettre à jour le marqueur quand une adresse est saisie (nécessite une API de géocodage)
</script>
@endsection
