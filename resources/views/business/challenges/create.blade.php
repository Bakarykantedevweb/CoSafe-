@extends('layouts.business')
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
        grid-template-columns: repeat(3, 1fr); /* 3 colonnes */
    }
    .container2 {
        grid-template-columns: repeat(5, 1fr); /* 3 colonnes */
    }
}

/* Adaptation pour mobiles (moins de 768px) */
@media (max-width: 768px) {
    .container {
        grid-template-columns: repeat(2, 1fr); /* 2 colonnes */
    }
    .container2 {
        grid-template-columns: repeat(3, 1fr); /* 3 colonnes */
    }
}

/* Adaptation pour petits écrans (moins de 480px) */
@media (max-width: 480px) {
    .container {
        grid-template-columns: repeat(1, 1fr); /* 1 colonne (affichage en liste) */
        padding: 0px;
    }
    .container2 {
        grid-template-columns: repeat(1, 1fr); /* 3 colonnes */
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
                        <a href="{{ url('challenges/reports') }}" class="btn btn-primary">Retour</a>
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
                        <form method="POST" action="{{ url('business/challenges/create') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-3">

                                <div class="alert alert-secondary">
                                    <h3 class="text-center"><i class="bi bi-card-checklist"></i> Identification du promoteur
                                        du challenge</h3>
                                    <p style="text-align: center;">Veuillez décrire les différentes informations du
                                        promoteur du challenge.</p>
                                </div>
                                <div class="col-md-6 mb-3">
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
        <div class="col-md-6 mb-3">
        <div class="row g-3">
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-geo"></i> Localisation</h4>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">Pays</label>

                                    <select class="form-control form-select mb-3" name="pays"
                                                    id="pays">
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
                                    <select id="ville" size="3" name="ville"
                                                    class="form-control form-select col-sm-12"
                                                    required>
                                                @foreach ($villes_frances as $v)
                                                <option data-option="France"
                                                        value="{{ $v }}">{{ $v }}</option>
                                                @endforeach
                                                @foreach ($villes_luxembourg as $v)
                                                <option data-option="Luxembourg"
                                                        value="{{ $v }}">{{ $v }}</option>
                                                @endforeach
                                                @foreach ($villes_belgique as $v)
                                                <option data-option="Belgique"
                                                        value="{{ $v }}">{{ $v }}</option>
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
        <h2 class="fs-title">Informations complémentaires (si vous êtes une entreprise)</h2>

        <div class="row">
        <div class="col-lg-6 mb-3">
        <input type="text"
               class="form-control "
               id="nomcommercial" name="nomcommercial" placeholder="Nom commercial"
               value="">
                        </div>

        <div class="col-lg-6 mb-3">
        <input type="text"
               class="form-control "
               id="numeroentreprise" name="numeroentreprise" placeholder="N° d'entreprise"
               value="">
                        </div>

        <div class="col-lg-6 mb-3">
        <input type="text"
               class="form-control "
               name="numeroagreation" placeholder="N° d'agréation"
               value="">
                        </div>

        <div class="col-lg-6 mb-4">

        <select id="typesactivite" name="typesactivite[]" multiple
                class="form-control form-select typesActiviteSelect2 ">

                                            <option value="Aides au quotidien"
                        >
                        Aides au quotidien</option>
                                            <option value="Aides aux personnes"
                        >
                        Aides aux personnes</option>
                                            <option value="Enfants &amp; Soutiens scolaires"
                        >
                        Enfants &amp; Soutiens scolaires</option>
                                            <option value="Espaces verts"
                        >
                        Espaces verts</option>
                                            <option value="Expertises"
                        >
                        Expertises</option>
                                            <option value="Facility managements"
                        >
                        Facility managements</option>
                                            <option value="Horeca &amp; Loisirs"
                        >
                        Horeca &amp; Loisirs</option>
                                            <option value="Maisons &amp; Jardins"
                        >
                        Maisons &amp; Jardins</option>
                                            <option value="Nettoyages"
                        >
                        Nettoyages</option>
                                            <option value="Travaux &amp; Réparations"
                        >
                        Travaux &amp; Réparations</option>
                                        </select>

                            </div>

        <div class="col-lg-6 mb-3">
        <label>Date début d’activité</label>
        <input type="date" min="2025-03-18" class="form-control "id="datedebutinscription" name="datedebutinscription"
               value="" required>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                                    <label>Description complémentaire éventuelle :</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                                <div class="alert alert-secondary">
                                    <h4 class="text-secondary"><i class="bi bi-info-square"></i> Informations du Safe-Challenge</h4>
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

                                    <!-- Section 4: Identification de la problématique à solutionner -->
                                    <div class="alert alert-secondary">
                                        <h4 class="text-secondary"><i class="bi bi-info-square"></i> Identification de la problématique à solutionner</h4>
                                    </div>
                                    <div class="alert alert-secondary">
                                        <label class="text-secondary">Quel type de risque souhaitez-vous proposer à solution dans le cadre du Safe-Challenge ? (Sélectionnez tout ce qui s'applique)</label>
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                            <h3>Violences faites aux femmes</h3>
                                            <ul>
                                                <li><input type="checkbox" value="Harcèlement de rue">Harcèlement de rue</li>
                                                <li><input type="checkbox" value="Agressions physiques et sexuelles">Agressions physiques et sexuelles</li>
                                                <li><input type="checkbox" value="Violences conjugales">Violences conjugales</li>
                                                <li><input type="checkbox" value="Mariage forcé et mutilations sexuelles">Mariage forcé et mutilations sexuelles</li>
                                            </ul>
                                        </div>
                                        <div class="column">
                                            <h3>Violences minorités & discriminations</h3>
                                            <ul>
                                                <li><input type="checkbox" value="Homophobie et transphobie">Homophobie et transphobie</li>
                                                <li><input type="checkbox" value="Racisme et discriminations ethniques">Racisme et discriminations ethniques</li>
                                                <li><input type="checkbox" value="Discriminations religieuses">Discriminations religieuses</li>
                                                <li><input type="checkbox" value="Discriminations contre les personnes handicapées">Discriminations contre les personnes handicapées</li>
                                            </ul>
                                        </div>
                                        <div class="column">
                                            <h3>Violences physiques & agressions</h3>
                                            <ul>
                                                <li><input type="checkbox" value="Rixes et bagarres">Rixes et bagarres</li>
                                                <li><input type="checkbox" value="Agressions gratuites ou ciblées">Agressions gratuites ou ciblées</li>
                                                <li><input type="checkbox" value="Usage d’armes blanches ou à feu">Usage d’armes blanches ou à feu</li>
                                                <li><input type="checkbox" value="Tentatives de kidnapping et enlèvements">Tentatives de kidnapping et enlèvements</li>
                                                <li><input type="checkbox" value="Signalement de véhicules suspects aux abords des écoles">Signalement de véhicules suspects aux abords des écoles</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Section 5: Compétences attendues -->
                                    <div class="alert alert-secondary">
                                        <b>Compétences attendues</b> (pour évaluer les propositions ?) (Cochez tout ce qui s’applique)
                                    </div>
                                    <div class="container2">
                                        <div class="column2"><input type="checkbox" value="Viabilité financière et accessibilité">Viabilité financière et accessibilité</div>
                                        <div class="column2"><input type="checkbox" value="Créativité et innovation de la solution">Créativité et innovation de la solution</div>
                                        <div class="column2"><input type="checkbox" value="Impact sur la prévention et la réduction des risques">Impact sur la prévention et la réduction des risques</div>
                                        <div class="column2"><input type="checkbox" value="Faisabilité technique et opérationnelle">Faisabilité technique et opérationnelle</div>
                                        <div class="column2"><input type="checkbox" value="Durabilité et adaptabilité de la solution">Durabilité et adaptabilité de la solution</div>
                                        <div class="column2"><input type="checkbox" value="Engagement & mobilisation citoyenne">Engagement & mobilisation citoyenne</div>
                                        <div class="column2"><input type="checkbox" value="Synergie avec les forces de l’ordre">Synergie avec les forces de l’ordre</div>
                                        <div class="column2"><input type="checkbox" value="Facilité d’adoption et d’implémentation">Facilité d’adoption et d’implémentation</div>
                                        <div class="column2"><input type="checkbox" value="Effet dissuasif et réactif face aux menaces">Effet dissuasif et réactif face aux menaces</div>
                                        <div class="column2"><input type="checkbox" value="Impact social et renforcement du lien communautaire">Impact social et renforcement du lien communautaire</div>
                                    </div>

                                    <!-- Section 6: Calendrier des sélections -->
                                    <div class="alert alert-secondary">
                                        <h2 class="fs-title">Calendrier des sélections</h2>
                                        <h4 class="text-primary">Phase de candidature</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label>Date de début des inscriptions</label>
                                            <input type="date" min="2025-03-18" class="form-control" id="datedebutinscription" name="datedebutinscription" >
                                            @error('datedebutinscription') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>Date de fin des inscriptions</label>
                                            <input type="date" min="2025-03-18" class="form-control" id="datefininscription" name="datefininscription" >
                                            @error('datefininscription') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <h4 class="text-primary">Phase de sélection</h4>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label>Date de début des sélections</label>
                                            <input type="date" min="2025-03-18" class="form-control" id="datedebutselection" name="datedebutselection" >
                                            @error('datedebutselection') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>Date de fin des sélections</label>
                                            <input type="date" min="2025-03-18" class="form-control" id="datefinselection" name="datefinselection" >
                                            @error('datefinselection') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <!-- Section 7: Équipe -->
                                    <h4 class="text-primary">Équipe</h4>
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="typesactivite" class="text-primary">Formes des équipes</label>
                                            <select class="form-control form-select" id="compositionequipes" name="compositionequipes" >
                                                <option value="" selected>Composition des équipes</option>
                                                <option value="En solo">En solo</option>
                                                <option value="En equipe de 2-5 participants">En equipe de 2-5 participants</option>
                                            </select>
                                            @error('compositionequipes') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="number" min="1" placeholder="Nombre d'équipes minimum" class="form-control" id="nombreequipesmin" name="nombreequipesmin" >
                                            @error('nombreequipesmin') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="number" min="1" placeholder="Nombre d'équipes maximum" class="form-control" id="nombreequipesmax" name="nombreequipesmax" >
                                            @error('nombreequipesmax') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="typesactivite" class="text-primary">Critère de participation</label>
                                            <select class="form-control form-select" id="criteresparticipation" name="criteresparticipation" >
                                                <option value="" selected>Sélectionnez un critère</option>
                                                <option value="Être un recruteur ou entreprise">Être un recruteur ou entreprise</option>
                                                <option value="Être une Association ou une localité">Être une Association ou une localité</option>
                                                <option value="Accepter le règlement et les conditions de participation">Accepter le règlement et les conditions de participation</option>
                                            </select>
                                            @error('criteresparticipation') <span class="text-danger">{{ $message }}</span> @enderror
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

                                    <!-- Section 8: Géolocalisation du challenge -->
                                    <div class="alert alert-secondary">
                                        <h4 class="text-secondary"><i class="bi bi-geo-alt"></i> Géolocalisation du challenge</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="">Pays</label>
                                            <input class="form-control" type="text" name="payschallenge">
                                            @error('payschallenge') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="">Ville</label>
                                            <input class="form-control" type="text" name="villechallenge">
                                            @error('villechallenge') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="">Campus</label>
                                            <input class="form-control" type="text" name="campus">
                                            @error('campus') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Date de lancement</label>
                                            <input class="form-control" type="date" name="datelancement">
                                            @error('datelancement') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="">Dates de clotûre</label>
                                            <input class="form-control" type="date" name="datecloture">
                                            @error('datecloture') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <!-- Section 9: Conditions générales -->
                                    <div class="col-md-12 mb-3">
                                        <input type="checkbox" name="accepte_conditions" value="1">
                                        <label for="accepte_conditions">J'accepte les conditions générales et termes de la plateforme.</label>
                                        @error('accepte_conditions') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Bouton de soumission -->
                                    <div class="col-md-4 mb-3 text-center">
                                        <button class="btn btn-primary btn-block" type="submit">PUBLIER LE CHALLENGE</button>
                                    </div>
                                </form>


                    </div>
                </div>
            </div>
        </div>

    </div
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
