@extends('layouts.social')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div
                class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                <div>
                    <h1 class="mb-0 h2 fw-bold">Tableau de Social Sponsors  </h1>
                </div>
                <div class="d-flex gap-3">
                    <div class="input-group">
                        <input class="form-control flatpickr" type="text" placeholder="Select Date"
                            aria-describedby="basic-addon2" />

                        <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                    </div>
                    <a href="#" class="btn btn-primary">Parametre</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row gy-4 mb-4">
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Signalements
                                Effectués</span>
                        </div>
                        <div>
                            <span class="fe fe-flag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">24</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-success fw-semibold">
                                <i class="fe fe-trending-up me-1"></i>
                                +3 cette semaine
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Challenges en Cours</span>
                        </div>
                        <div>
                            <span class="fe fe-award fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">5</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-success fw-semibold">
                                <i class="fe fe-trending-up me-1"></i>
                                2 nouveaux
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Badges Gagnés</span>
                        </div>
                        <div>
                            <span class="fe fe-shield fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">12</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-success fw-semibold">
                                <i class="fe fe-trending-up me-1"></i>
                                +1 nouveau
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quel est votre besoin section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Quel est votre besoin ?</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered search-table">
                        <thead>
                            <tr>
                                <th>Type d'acte</th>
                                <th>Catégorie</th>
                                <th>Sous-catégorie</th>
                                <th>Pays</th>
                                <th>Ville</th>
                                <th>Campus</th>
                                <th>GO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="type-cell">
                                    <div class="active">Signalement</div>
                                    <div>Challenge</div>
                                    <div>Achat</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light">
                                        <i class="fe fe-search"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers signalements et offres -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Derniers signalements</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Signalement #1245</h6>
                                <small>Il y a 3 jours</small>
                            </div>
                            <p class="mb-1">Vol de vélo près de la bibliothèque</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Signalement #1244</h6>
                                <small>Il y a 5 jours</small>
                            </div>
                            <p class="mb-1">Harcèlement signalé au bâtiment C</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Dernières offres commerciales</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Réduction cafétéria</h6>
                                <small>Nouveau</small>
                            </div>
                            <p class="mb-1">-15% sur les boissons chaudes</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Offre librairie campus</h6>
                                <small>3 jours restants</small>
                            </div>
                            <p class="mb-1">2 livres achetés = 1 offert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Derniers challenges -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Derniers Challenges</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Challenge Sécurité</h6>
                                <small class="text-success">En cours</small>
                            </div>
                            <p class="mb-1">Participez à l'amélioration de la sécurité du campus</p>
                            <div class="progress mt-2" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Challenge Entraide</h6>
                                <small class="text-warning">Nouveau</small>
                            </div>
                            <p class="mb-1">Aidez 5 étudiants en difficulté</p>
                            <div class="progress mt-2" style="height: 5px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection