<style>
    body {
        font-family: Arial, sans-serif;
    }

    .navbar-vertical {
        width: 250px;
        height: 100vh;
        background: #3F51B5;
        /* Indigo */
        color: white;
        position: fixed;
        padding-top: 20px;
    }

    .navbar-vertical a {
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        display: block;
        transition: 0.3s;
    }

    .navbar-vertical a:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .nav-section-title {
        padding: 15px 20px;
        font-weight: bold;
        font-size: 1.1em;
    }

    .nav-item i {
        margin-right: 10px;
    }
</style>
<nav class="bg-indigo-600 navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ url('business/dashbord') }}">
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
                <a class="nav-link" href="{{ url('business/reports/helps') }}">
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
                <a class="nav-link" href="{{ url('business/reports') }}">
                    <i class="nav-icon fe fe-flag me-2"></i>
                    2. Gestion des signalements
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-indent-small" href="{{ url('business/reports') }}">
                    - Trouver un signalement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-indent-small" href="{{ url('business/reports/create') }}">
                    - Signaler un acte (vol, violence...)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-indent-small" href="{{ url('business/reports/posterbesoin') }}">
                    - Déposer un besoin d'aide
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-indent-small" href="{{ url('business/reports/appelaides') }}">
                    - Répondre à un appel à l’aide
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
                    <span class="nav-section-title">Club Challenge</span>
                </a>
            </li>
            <li class="nav-item club-challenge">
                <a class="nav-link" href="{{ url('business/challenges/trouverchallenge') }}">
                    <i class="nav-icon fe fe-search me-2"></i>
                    1-Trouver un challenge
                </a>
            </li>
            <li class="nav-item club-challenge">
                <a class="nav-link" href="{{ url('business/challenges') }}">
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
                    Trouver un business Angel
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
                <a class="nav-link" href="{{ url('business/logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fe fe-power me-2"></i>
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ url('business/logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
