<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Codescandy" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

  <!-- darkmode js -->
  <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

  <!-- Libs CSS -->
  <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
  <title>Dashboard Campus Angel</title>
  @livewireStyles

  <style>
    .nav-section-title {
      font-weight: bold;
      padding: 0.5rem 1rem;
      margin-top: 0.5rem;
      font-size: 15px;
    }
    .nav-section-subtitle {
      font-size: 13px;
      color: #6c757d;
      padding: 0 1rem;
      margin-bottom: 0.5rem;
    }
    .nav-indent {
      padding-left: 2rem !important;
      font-size: 13px;
    }
    .nav-indent-small {
      padding-left: 3rem !important;
      font-size: 12px;
      color: #6c757d;
    }
    .club-challenge {
      background-color: rgba(255, 235, 59, 0.2);
    }
    .search-table th, .search-table td {
      border: 1px solid #dee2e6;
      padding: 8px;
    }
    .search-table th {
      background-color: #f8f9fa;
    }
    .type-cell div {
      padding: 4px;
    }
    .type-cell .active {
      background-color: #ffeb3b;
    }
    .logo-white {
      filter: brightness(0) invert(1);
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <!-- Wrapper -->
  <div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
      <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('assets/images/brand/logo/logo.svg') }}" alt="Geek" class="logo-white mb-3">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
          <!-- My CoSafe Section -->
          <li class="nav-section-title">My CoSafe</li>
          <li class="nav-section-subtitle">Communication & Réseaux</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-message-square me-2"></i>
              1. Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-zap me-2"></i>
              2. Flash en temps réel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-users me-2"></i>
              3. Forum
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-message-circle me-2"></i>
              4. Avis & Communauté
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-bell me-2"></i>
              5. Mes Alertes
            </a>
          </li>

          <!-- AlertSafe Section -->
          <li class="nav-section-title">AlertSafe</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-help-circle me-2"></i>
              1. Comment ça marche
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              (Texte ou vidéo)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-flag me-2"></i>
              2. Gestion des signalements
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Trouver un signalement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Signaler un acte (vol, violence...)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Déposer un besoin d'aide
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Mes signalements (Vos Mises à jour)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-check-circle me-2"></i>
              3- Mes Interventions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Signalements traités
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Signalements résolus
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Avis & commentaires
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Mes statistiques
            </a>
          </li>

          <!-- Safe Store Section -->
          <li class="nav-section-title">Safe Store</li>
          <li class="nav-section-subtitle">Marketplace Sécuritaire</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-help-circle me-2"></i>
              1. Comment ça marche
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              (Texte ou vidéo)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-shopping-bag me-2"></i>
              2- Gestion commerciale
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Parcourir les offres
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Achats (Commandes & paiements)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Achats réalisés
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-indent-small" href="#">
              - Avis & commentaires
            </a>
          </li>

          <!-- ClubChallenge Section -->
          <li class="nav-item club-challenge">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-award me-2"></i>
              <span class="nav-section-title">ClubChallenge</span>
            </a>
          </li>
          <li class="nav-item club-challenge">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-search me-2"></i>
              1-Trouver un challenge
            </a>
          </li>
          <li class="nav-item club-challenge">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-list me-2"></i>
              2- Mes Challenges
            </a>
          </li>
          <li class="nav-item club-challenge">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-help-circle me-2"></i>
              3-Support Challengers
            </a>
          </li>

          <!-- Aides & Support Section -->
          <li class="nav-section-title">Aides & Support</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-book me-2"></i>
              Médiation et Assistance juridique
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-user me-2"></i>
              Contacter un modérateur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-bell me-2"></i>
              Gestion des Alertes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-briefcase me-2"></i>
              Offres & Partenariats
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-users me-2"></i>
              Trouver un Partenaire à promouvoir
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-clipboard me-2"></i>
              Trouver un Stage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-user-check me-2"></i>
              Trouver un Campus Angel
            </a>
          </li>

          <!-- Paramètres Section -->
          <li class="nav-section-title">Paramètres</li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-user me-2"></i>
              Mon profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="nav-icon fe fe-share-2 me-2"></i>
              Mes réseaux sociaux
            </a>
          </li>

          <!-- Déconnexion -->
          <li class="nav-item">
            <a class="nav-link" href="{{ url('campus/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fe fe-power me-2"></i>
              Déconnexion
            </a>
            <form id="logout-form" action="{{ url('campus/logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <main id="page-content">
      <div class="header">
        <!-- navbar -->
        <nav class="navbar-default navbar navbar-expand-lg">
          <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
          </a>
          <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
              <span class="position-absolute ps-3 search-icon">
                <i class="fe fe-search"></i>
              </span>
              <input type="search" class="form-control ps-6" placeholder="Rechercher..." />
            </form>
          </div>
          <!--Navbar nav -->
          <div class="ms-auto d-flex">
            <div class="dropdown">
              <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <i class="bi theme-icon bi-sun-fill"></i>
                    <span class="ms-2">Light</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                    <span class="ms-2">Dark</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <i class="bi theme-icon bi-circle-half"></i>
                    <span class="ms-2">Auto</span>
                  </button>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
              <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                  <div>
                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                      <span class="h4 mb-0">Notifications</span>
                      <a href="# ">
                        <span class="align-middle">
                          <i class="fe fe-settings me-1"></i>
                        </span>
                      </a>
                    </div>
                    <!-- List group -->
                    <ul class="list-group list-group-flush" data-simplebar style="max-height: 300px">
                      <li class="list-group-item bg-light">
                        <div class="row">
                          <div class="col">
                            <a class="text-body" href="#">
                              <div class="d-flex">
                                <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle" />
                                <div class="ms-3">
                                  <h5 class="fw-bold mb-1">Nouveau signalement:</h5>
                                  <p class="mb-3">Un nouveau signalement a été effectué près de votre campus</p>
                                  <span class="fs-6">
                                    <span>
                                      <span class="fe fe-flag text-success me-1"></span>
                                      Il y a 2 heures,
                                    </span>
                                    <span class="ms-1">14:19</span>
                                  </span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-auto text-center me-2">
                            <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Marquer comme lu"></a>
                            <div>
                              <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer">
                                <i class="fe fe-x"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="border-top px-3 pt-3 pb-0">
                      <a href="#" class="text-link fw-semibold">Voir toutes les notifications</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- List -->
              <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg')}}" class="rounded-circle" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                  <div class="dropdown-item">
                    <div class="d-flex">
                      <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg')}}" class="rounded-circle" />
                      </div>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1">{{ Auth::guard('campus')->user()->name ?? 'Utilisateur' }}</h5>
                        <p class="mb-0">{{ Auth::guard('campus')->user()->email ?? 'utilisateur@campus.fr' }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <ul class="list-unstyled">
                    <li>
                      <a class="dropdown-item" href="">
                        <i class="fe fe-user me-2"></i>
                        Profile
                      </a>
                    </li>
                  </ul>
                  <div class="dropdown-divider"></div>
                  <ul class="list-unstyled">
                    <li>
                      <a class="dropdown-item" href="{{ url('campus/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fe fe-power me-2"></i>
                        Déconnexion
                      </a>
                      <form id="logout-form" action="{{ url('campus/logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      
      <!-- Page Header -->
      <!-- Container fluid -->
      <section class="container-fluid p-4">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
              <div>
                <h1 class="mb-0 h2 fw-bold">Dashboard Campus Angel</h1>
              </div>
              <div class="d-flex gap-3">
                <div class="input-group">
                  <input class="form-control flatpickr" type="text" placeholder="Sélectionner une date" aria-describedby="basic-addon2" />
                  <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                </div>
                <a href="#" class="btn btn-primary">Paramètres</a>
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
                    <span class="fs-6 text-uppercase fw-semibold ls-md">Signalements Effectués</span>
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
                      <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h6 class="mb-1">Challenge Entraide</h6>
                      <small class="text-warning">Nouveau</small>
                    </div>
                    <p class="mb-1">Aidez 5 étudiants en difficulté</p>
                    <div class="progress mt-2" style="height: 5px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Script -->
  <!-- Libs JS -->
  <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

  <!-- Theme JS -->
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>

  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendors/chart.js') }}"></script>
  <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
  @livewireScripts
</body>
</html>