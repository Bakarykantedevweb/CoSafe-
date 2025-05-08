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
    <style>

        h2 {
          color: #2c3e50;
          border-bottom: 2px solid #3498db;
          padding-bottom: 5px;
        }
        fieldset {
          margin-bottom: 30px;
          padding: 20px;
          border: 1px solid #ccc;
          background: #fff;
          border-radius: 8px;
        }

        input[type="submit"] {
          background-color: #3498db;
          color: white;
          padding: 12px 24px;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          cursor: pointer;
        }
        input[type="submit"]:hover {
          background-color: #2980b9;
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

                                <!-- Section Promoteur (conservée de votre formulaire original) -->
                                <div class="alert alert-secondary">
                                    <h3 class="text-center"><i class="bi bi-card-checklist"></i> Identification du promoteur
                                        du challenge</h3>
                                    <p style="text-align: center;">Veuillez décrire les différentes informations du
                                        promoteur du challenge.</p>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="alert alert-secondary">
                                        <h4 class="text-secondary"><i class="bi bi-person-badge"></i> Informations
                                            personnelles contact</h4>
                                    </div>

                                    <div class="col-md-6 mb-3">
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
                                </div>

                                <div class="col-md-6 mb-3">
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
                                            <select id="ville" name="ville" class="form-control col-sm-12" required>
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
                                    <h4 class="text-secondary"><i class="bi bi-geo"></i> Informations complémentaires (si
                                        vous êtes une entreprise)</h4>
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
                                    <h4 class="text-secondary"><i class="bi bi-info-square"></i> Informations du Cyber Challengé
                                    </h4>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Nom du Challenge </label>
                                    <input class="form-control" type="text" name="nomchallenge">
                                    @error('nomchallenge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="">Image du  Challenge </label>
                                <input class="form-control" type="file" name="image"
                                    aria-label="file example">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Objectif du Challenge --</label>
                                    <select id="actionsPrioritaires" name="action_prioritaire" class="form-control">
                                        <option value="Créer un réseau d’alerte locale"> Créer un réseau d’alerte locale</option>
                                        <option value="Renforcer la protection des zones sensibles">Renforcer la protection des zones sensibles</option>
                                        <option value="Former citoyens et travailleurs">Former citoyens et travailleurs</option>
                                        <option value="Optimiser la coopération avec les forces de l’ordre"> Optimiser la coopération avec les forces de l’ordre</option>
                                        <option value="Développer des Safe solutions innovantes">Développer des Safe solutions innovantes</option>
                                        <option value="Encourager l’engagement citoyen">Encourager l’engagement citoyen</option>
                                        <option value="Sensibiliser et prévenir les risques">Sensibiliser et prévenir les risques</option>
                                        <option value="Faciliter l’aménagement sécurisé des espaces"> Faciliter l’aménagement sécurisé des espaces</option>
                                        <option value="Promouvoir la vigilance numérique"> Promouvoir la vigilance numérique</option>
                                        <option value="Accompagner les commerçants & entreprises dans l’évaluation des risques">Accompagner les commerçants & entreprises dans l’évaluation des risques</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                        <label>Description du Cyber- Security challenge
                                            <br>Formulez un énoncé clair pour le Cyber- challenge : </label>
                                        <textarea class="form-control" rows="5" name="description" placeholder="ex: Comment protéger nos bases de données clients contre les attaques par injection SQL ? ou Quelles solutions simples et efficaces pour renforcer la cybersécurité de notre chaîne logistique ?"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                <div class="alert alert-secondary">
                                    <label for="typeRisque"><strong>Identification de la problématique à solutionner</strong></label><br>

                                </div>
                                <div class="alert alert-secondary">
                                    <b><b></b>Identification de la problématique à solutionner</b>
                                    <br>
Dans quel contexte se situe votre besoin en cybersécurité ?

                                        </p> </div>

                                    <div class="col-md-6 mb-3">
                                    <fieldset>
                                        <h2>Protection des données</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="data[]" value="personnelles"> Données personnelles</label><br>
                                          <label><input type="checkbox" name="data[]" value="RH_médicales"> Données RH ou médicales</label><br>
                                          <label><input type="checkbox" name="data[]" value="financières"> Données financières, bancaires</label><br>
                                          <label><input type="checkbox" name="data[]" value="propriété_intellectuelle"> Propriété intellectuelle, brevets</label><br>
                                          <label><input type="checkbox" name="data[]" value="bases_données"> Bases de données internes ou partenaires</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Sécurisation des infrastructures IT</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="infra[]" value="réseaux"> Réseaux internes, VPN, pare-feu</label><br>
                                          <label><input type="checkbox" name="infra[]" value="serveurs"> Serveurs, data centers, cloud</label><br>
                                          <label><input type="checkbox" name="infra[]" value="systèmes"> Systèmes d’exploitation, routeurs</label><br>
                                          <label><input type="checkbox" name="infra[]" value="postes"> Postes utilisateurs (fixes/mobiles), BYOD</label><br>
                                          <label><input type="checkbox" name="infra[]" value="matériel"> Matériel (contrôle d’accès, biométrie)</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Applications et numériques</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="appli[]" value="sites_web"> Sites web, e-commerce</label><br>
                                          <label><input type="checkbox" name="appli[]" value="applications"> Applications métiers</label><br>
                                          <label><input type="checkbox" name="appli[]" value="collaboratifs"> Environnements collaboratifs</label><br>
                                          <label><input type="checkbox" name="appli[]" value="erp_crm"> Logiciels ERP, CRM, etc.</label><br>
                                          <label><input type="checkbox" name="appli[]" value="api"> API, services web, backends exposés</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Gouvernance & Conformité</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="gouv[]" value="rgpd"> RGPD, NIS2, ISO 27001...</label><br>
                                          <label><input type="checkbox" name="gouv[]" value="politiques"> Politiques de sécurité, chartes</label><br>
                                          <label><input type="checkbox" name="gouv[]" value="audits"> Audits, cartographie des risques, PCA/PRA</label><br>
                                          <label><input type="checkbox" name="gouv[]" value="iam"> Gestion des droits et des accès (IAM)</label><br>
                                          <label><input type="checkbox" name="gouv[]" value="tracabilite"> Traçabilité, journalisation des activités</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Sécurité du contenu & des communications</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="content[]" value="courriels"> Courriels professionnels, messageries instantanées</label><br>
                                          <label><input type="checkbox" name="content[]" value="rs"> Réseaux sociaux, canaux publics</label><br>
                                          <label><input type="checkbox" name="content[]" value="plateformes"> Plateformes de diffusion de contenu</label><br>
                                          <label><input type="checkbox" name="content[]" value="image_marque"> Protection de l’image & e-réputation</label><br>
                                          <label><input type="checkbox" name="content[]" value="contenu_critique"> Contenus numériques critiques</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Vulnérabilités et cyberattaques</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="cyber[]" value="phishing"> Phishing, spear phishing, ingénierie sociale</label><br>
                                          <label><input type="checkbox" name="cyber[]" value="ransomware"> Rançongiciels, malwares</label><br>
                                          <label><input type="checkbox" name="cyber[]" value="intrusions"> Intrusions, exfiltration de données</label><br>
                                          <label><input type="checkbox" name="cyber[]" value="ddos"> Attaques DDoS, scans</label><br>
                                          <label><input type="checkbox" name="cyber[]" value="failles"> Exploitation de failles connues</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Objets connectés & systèmes IoT/OT</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="iot[]" value="capteurs"> Capteurs, caméras, badges</label><br>
                                          <label><input type="checkbox" name="iot[]" value="automates"> Automates, robots, SCADA</label><br>
                                          <label><input type="checkbox" name="iot[]" value="env"> Capteurs environnementaux ou énergétiques</label><br>
                                          <label><input type="checkbox" name="iot[]" value="vehicules"> Véhicules ou infrastructures connectées</label><br>
                                          <label><input type="checkbox" name="iot[]" value="domotique"> Domotique, smart buildings</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <fieldset>
                                        <h2>Cyber résilience et gestion de crise</h2>
                                        <div class="category">
                                          <label><input type="checkbox" name="resilience[]" value="siem"> SIEM, SOC, honeypots</label><br>
                                          <label><input type="checkbox" name="resilience[]" value="reaction"> Réaction rapide aux incidents</label><br>
                                          <label><input type="checkbox" name="resilience[]" value="pca"> Plan de reprise d’activité (PRA/PCA)</label><br>
                                          <label><input type="checkbox" name="resilience[]" value="formation"> Formation des équipes</label><br>
                                          <label><input type="checkbox" name="resilience[]" value="communication_crise"> Communication de crise</label>
                                        </div>
                                      </fieldset>
                                    </div>
                                 <!-- Section 5: Compétences attendues -->
                                 <div class="col-12 col-md-12 mb-3">
                                        <label>Veuillez décrire votre problématique :</label>
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label>Décrivez en détail la problématique joignant un fichier descriptif éventuel : </label>
                                <input class="form-control" type="file" name="image"
                                    aria-label="file example">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-12 mb-3">
                                    <label><b>Quelles sont les contraintes actuelles liées à la problématique ?</b>
                                    <br>
Veuillez décrire ces contraintes
</label>
                                    <textarea class="form-control" rows="5" name="dotation"
                                        placeholder="Veuillez décrire dans ce cadre, la contrepartie que vous proposez ou vous demandez en tant que Eco-Talent :  Badge à gagner – Bons d’achat – Services ou marchandises souhaités, Jobs …"></textarea>
                                    @error('dotation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label><b>Quelles exigences minimales doivent être respectées par les solutions proposées ?
(ex. budget limité….)
</b>
                                    <br>
Veuillez décrire ces contraintes
</label>
                                    <textarea class="form-control" rows="5" name="dotation"
                                        placeholder="Veuillez décrire dans ce cadre, la contrepartie que vous proposez ou vous demandez en tant que Eco-Talent :  Badge à gagner – Bons d’achat – Services ou marchandises souhaités, Jobs …"></textarea>
                                    @error('dotation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                <label for="">Règlement du Challenge        : </label>
                                <input class="form-control" type="file" name="image"
                                    aria-label="file example">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label class="form-label">Thématiques sociales du Cyber Challenges proposés: </label>
                                <select name="theme" id="theme"  class="form-select">
      <option value="bien-etre">Bien-être & responsabilité fournisseur</option>
      <option value="climat">Climat, biodiversité & perf environnement</option>
      <option value="inclusion-discrimination">Inclusion & lutte contre les discriminations</option>
      <option value="eco-locale">Développement de l’économie locale</option>
      <option value="eco-sociale">Éco sociale & partenariats solidaires</option>
      <option value="egalite-femmes">Égalité professionnelle & leadership féminin</option>
      <option value="handicap">Inclusion pers. en situation de handicap</option>
      <option value="risques-psycho">Prév risques psycho-sociaux & harcèlement</option>
      <option value="jeunesse">Éduca, insertion & engagement des jeunes</option>
      <option value="cohesion-paix">Cohésion soc, paix & tolérance en entreprise</option>
      <option value="precarite-etudiante">Lutte contre la précarité étudiante & jeune</option>
      <option value="precarite-sociale">Inclusion & lutte contre la précarité sociale</option>
      <option value="solidarite-internationale">Solidarité internationale & dév durable glob</option>
      <option value="intergenerationnelle">Accompagnement & transition intergénérationnelle</option>
      <option value="sport-sante">Sport, santé & qualité de vie au travail</option>
      <option value="violences-femmes">Lutte contre les violences faites aux femmes</option>
    </select>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                    <label class="form-label" for="">Type du challenge</label>
                                    <select name="profil" id="profil" class="form-select">
      <option value="talent-confirme">Talent confirmé</option>
      <option value="talent-starter">Talent starter</option>
      <option value="demandeur-emploi">Demandeur d’emploi</option>
      <option value="freelance">Freelance</option>
      <option value="etudiant">Étudiant</option>
      <option value="autre">Autre</option>
    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-12 mb-3">

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

<label class="form-label" for=""><b>Critères d’évaluation lors de la sélection </b>(pour évaluer les propositions ?)
<br>
<label class="form-label" >
      <input type="checkbox" name="criteres[]" value="creativite">
      <strong>1. Créativité & originalité de la solution proposée</strong><br>
      → Capacité de la solution à proposer une approche innovante, différenciante ou disruptive en cybersécurité (technologie, usage, modèle, etc.).
    </label><br><br>

    <label class="form-label" >
      <input type="checkbox" name="criteres[]" value="impact">
      <strong>2. Impact sur la réduction des vulnérabilités numériques</strong><br>
      → Potentiel mesurable de la solution à réduire les risques cyber (fuites de données, ransomwares, phishing, shadow IT…) et à renforcer la résilience globale.
    </label><br><br>

    <label class="form-label" >
      <input type="checkbox" name="criteres[]" value="faisabilite">
      <strong>3. Faisabilité technique & compatibilité avec l’écosystème IT</strong><br>
      → Niveau de maturité technologique, interopérabilité avec les systèmes existants, facilité d’intégration dans un environnement d’entreprise.
    </label><br><br>

    <label class="form-label" >
      <input type="checkbox" name="criteres[]" value="viabilite">
      <strong>4. Viabilité économique & modèle de déploiement</strong><br>
      → Coût de mise en œuvre, ROI prévisible, modèle économique viable pour une intégration durable dans une stratégie cybersécurité.
    </label><br><br>

    <label class="form-label" >
      <input type="checkbox" name="criteres[]" value="durabilite">
      <strong>5. Durabilité & évolutivité de la solution</strong><br>
      → Capacité de la solution à évoluer dans le temps, à s’adapter aux nouvelles menaces, à soutenir une montée en charge ou un déploiement à plus large échelle.
    </label>

@error('secteurs')
    <span class="text-danger">{{ $message }}</span>
@enderror
</div>

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
                                        placeholder="Veuillez décrire dans ce cadre, la contrepartie que vous proposez ou vous demandez en tant que Eco-Talent :  Badge à gagner – Bons d’achat – Services ou marchandises souhaités, Jobs …"></textarea>
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
                                    <label class="form-label" for="">Secteurs</label>
                                    <input class="form-control" type="text" name="secteur">
                                    @error('secteur')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="">Image représentant le challenge</label>
                                        <input class="form-control" type="file" name="image"
                                            aria-label="file example">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 mb-12">
                                    <div>
                                        <label for="">Fichier</label>
                                        <input class="form-control" type="file" name="fichier"
                                            aria-label="file example">
                                        @error('fichier')
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

        </div </section>
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
