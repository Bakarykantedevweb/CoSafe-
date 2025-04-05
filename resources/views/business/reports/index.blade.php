@extends('layouts.business')
@section('content')
    <section class="container-fluid p-4">
        <div class="row justify-content-center"> <!-- Centrage de la row -->
            <div class="col-lg-8 col-md-10 col-12 text-center"> <!-- Colonne plus étroite et centrée -->
                <!-- Titre principal centré -->
                <div class="border-bottom pb-3 mb-3">
                    <h1 class="mb-0 h2 fw-bold">Trouver une Safe-Alerte</h1>
                    <p class="mt-2">Cette rubrique vous permet de consulter des Alertes de sécurité signalées par des citoyens engagés, des collectivités, des commerces, des campus, des entreprises et d'autres acteurs locaux.</p>
                </div>

                <!-- Section "Comment ça marche" centrée -->
                <div class="mb-4 text-start"> <!-- text-start pour aligner le texte à gauche à l'intérieur -->
                    <h2 class="h4 fw-bold text-center">Comment ça marche ?</h2> <!-- Titre centré -->
                    <ul class="list-unstyled ps-0 ms-0">
                        <li class="mb-2"><span class="text-success me-2">✅ </span> Recherchez une alerte en filtrant par catégorie d'incident, lieu et date.</li>
                        <li class="mb-2"><span class="text-success me-2">✅ </span> Consultez les détails des signalements pour évaluer la situation.</li>
                        <li><span class="text-success me-2">✅ </span> Réagissez, partagez l'Alerte le plus largement possible.</li>
                    </ul>
                    <p class="text-center">Consultez ci-dessous les Safe-Alertes selon vos critères</p>
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
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Catégories lieux</th>
                                            <th>Date</th>
                                            <th>Catégories incident</th>
                                            <th>Source de l'Alerte</th>
                                            <th>Chercher</th>
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

                <!-- Message d'affichage -->
                <div class="fst-italic text-muted text-center"> <!-- Centrage du texte -->
                    Affichage ici des Safe-Alertes lancées par les auteurs des incidents
                </div>
            </div>
        </div>
    </section>
@endsection