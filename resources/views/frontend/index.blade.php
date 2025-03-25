

@extends('layouts.frontend')
@section('contend')
</head>
<body>

    <main>
        <h1>Ambassadeurs & Partenaires</h1>

        <section class="container grid">
            <div class="box">
                <h2>City Angel</h2>
                <p>Engagez-vous pour une ville plus sûre et solidaire.</p>
                <p>Veillez, protégez, assistez vos concitoyens.</p>
                <p>Faisons de notre ville un espace sécurisé d'entraide.</p>
            </div>
            <div class="box">
                <h2>Campus Angel</h2>
                <p>Engagez-vous, rejoignez la communauté solidaire.</p>
                <p>Veillez, protégez, aidez vos camarades.</p>
                <p>Faisons de notre campus un espace de confiance.</p>
            </div>
            <div class="box">
                <h2>Safy City</h2>
                <p>Unissons-nous pour une localité plus sûre et solidaire.</p>
                <p>Préservons, protégeons et accompagnons nos citoyens.</p>
                <p>Faisons de notre territoire un espace de confiance.</p>
            </div>
            <div class="box">
                <h2>Safy Business</h2>
                <p>Commerçants, Artisans ou Entreprises, Unissons-nous !</p>
                <p>Sécurisons-nous pour une économie locale plus sûre.</p>
                <p>Protégeons et accompagnons nos clients et partenaires.</p>
            </div>
        </section>

        <section class="image-grid">
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-05.jpg') }}" alt="Impactez la vie locale" class="img-fluid">
                <p>Impactez la vie locale</p>
                <a href="{{ url('city/register') }}" class="bg-indigo-600 cta">Devenez Contributeur City Angel</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="Agir pour le bien vivre en Campus" class="img-fluid">
                <p>Agir pour le bien vivre en Campus</p>
                <a href="{{ url('campus/register') }}" class="bg-indigo-600 cta">Devenez Campus Angel</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="Sécurisez votre territoire" class="img-fluid">
                <p>Sécurisez votre territoire</p>
                <a href="{{ url('territory/register') }}" class="bg-indigo-600 cta">Devenez Safy City</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-07.jpg') }}" alt="Protégez votre Business" class="img-fluid">
                <p>Protégez votre Business</p>
                <a href="{{ url('business/register') }}" class="bg-indigo-600 cta">Devenez Entreprise Safy Business</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>MENTIONS LÉGALES</h3>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Objectifs & valeurs sociales</a></li>
                    <li><a href="#">Pourquoi nous rejoindre ?</a></li>
                    <li><a href="#">Confidentialité & CGU</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE BUSINESS</h3>
                <ul>
                    <li><a href="#">Devenir Safy Commerçant</a></li>
                    <li><a href="#">Devenir Safy Entreprise</a></li>
                    <li><a href="#">Alertez, Protégez, Solidarisez vos collaborateurs</a></li>
                    <li><a href="#">Initiez des partenariats Écoles-Entreprises</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE PROMOTEURS</h3>
                <ul>
                    <li><a href="#">Devenez Promoteur de territoire sécurisé</a></li>
                    <li><a href="#">Boostez votre économie avec un territoire sécurisé</a></li>
                    <li><a href="#">Lancez des Safe-Challenges pour mobiliser</a></li>
                    <li><a href="#">Initiez des partenariats transfrontaliers</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE CITOYENS</h3>
                <ul>
                    <li><a href="#">Devenez City Angel</a></li>
                    <li><a href="#">Devenez Campus Angel</a></li>
                    <li><a href="#">Relevez des Safe-Challenges</a></li>
                    <li><a href="#">Lancez des Safe-Challenges</a></li>
                </ul>
            </div>
        </div>
    </footer>
    @endsection
