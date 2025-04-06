@extends('layouts.business')
@section('content')
    <section class="container p-4">
        <h1 class="mb-0 h2 fw-bold text-center">Mes avis & Commentaires</h1>
        <p class="mb-0 text-center">Retrouvez la liste complète de vos Avis & Commentaires</p>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Table -->
                    <div class="mb-5 mr-3 ml-3 mt-3">
                        <div class="fs-4 fw-normal w-100 border border-primary rounded-1 py-2 px-4 mb-4">
                            <h3 class="fs-4 h-4 text-secondary font-bold mb-3 text-center">
                                Cette rubrique regroupe l’ensemble de vos avis & Commentaires.
                            </h3>
                            <div>
                                <p class="mb-2">
                                    Suivez et gérez en un seul endroit tous vos avis et commentaires, qu’ils aient été
                                    publiés par vous ou à votre sujet.
                                </p>
                            </div>
                            <h4 class="fs-4 h-4 text-secondary font-bold mb-3 text-center">
                                Voici quelques conseils précieux mieux impacter encore votre communauté
                            </h4>
                            <ul class="list-unstyled ps-0 ms-0">
                                <li class="mb-2"><span class="text-success me-2">✅ </span> Maîtrisez votre image et votre
                                    engagement en consultant vos interactions.</li>
                                <li class="mb-2"><span class="text-success me-2">✅ </span> Valorisez votre expertise en
                                    partageant des retours constructifs.</li>
                                <li><span class="text-success me-2">✅ </span> Renforcez la confiance au sein de la
                                    communauté en suivant l’impact de vos contributions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-5 mr-3 ml-3 mt-3"> <!-- text-start pour aligner le texte à gauche à l'intérieur -->
                        <h2 class="h4 fw-bold text-center">Comment ça marche ?</h2> <!-- Titre centré -->
                        <ul class="list-unstyled ps-0 ms-0">
                            <li class="mb-2"><span class="text-success me-2">🔹 </span> Consultez vos commentaires et ceux
                                laissés à votre sujet.</li>
                            <li class="mb-2"><span class="text-success me-2">🔹 </span> Réagissez et ajustez votre
                                engagement selon les retours reçus.</li>
                            <li><span class="text-success me-2">🔹 </span> Contribuez à une communauté plus réactive et
                                collaborative.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive border-0 overflow-y-hidden">
                <div class="row mb-4">
                    <div class="bg-white pt-4">
                        <div class="table-responsive">
                            <table class="display text-center table" id="example1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Pays</th>
                                        <th scope="col">Ville</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Categorie Incendit</th>
                                        <th scope="col">Source Commentaire</th>
                                        <th scope="col">Cherhcer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
