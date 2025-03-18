<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/brand/logo/logo-inverse.svg') }}" alt="Geeks" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link " href="{{ url('/social/dashboard') }}">
                    <i class="nav-icon fe fe-home me-2"></i>
                    Tableau de Bord
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#">
                    <i class="nav-icon fe fe-bell me-2"></i>
                    Notifications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{ url('social/reports') }}">
                    <i class="nav-icon fe fe-flag me-2"></i>
                    Signalements
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('social/challenges') }}">
                    <i class="nav-icon fe fe-award me-2"></i>
                    Challenges
                </a>
            </li>
        </ul>
    </div>
</nav>