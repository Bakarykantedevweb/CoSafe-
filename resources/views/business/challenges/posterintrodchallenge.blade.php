@extends('layouts.business')
@section('content')
<div class="row mb-5">
                <div class="card rounded-1 p-3 mb-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-building-add h2 mb-0 text-primary"></i>
                        <h2 class="h2 text-primary mb-0">Lancer un Safe-Challenge</h2>
                    </div>
                </div>

                <header>
        <h1>Faites de votre voix un levier d’action et Faites Rayonner la Sécurité !</h1>
    </header>

    <section>
        <h2>Bienvenue dans l’espace des CitySafe Angels</h2>
        <p>Un réseau d’ambassadeurs de la sécurité déterminés à sensibiliser, mobiliser et inspirer autour des enjeux de protection et de prévention d’un territoire, d’une entreprise ou d’une communauté.</p>
    </section>

    <section>
        <h2>Pourquoi devenir un CitySafe Angel ?</h2>
        <ul>
            <li>✅ Sensibilisez et mobilisez les citoyens, entreprises et institutions pour un environnement plus sûr.</li>
            <li>✅ Valorisez votre engagement en devenant une référence en matière de prévention et de vigilance citoyenne.</li>
            <li>✅ Créez un impact réel en relayant les bonnes pratiques et en soutenant des initiatives de sécurisation.</li>
            <li>✅ Collaborez avec des acteurs engagés pour développer des campagnes de prévention et d’alerte.</li>
        </ul>
    </section>

    <section>
        <h2>Comment ça marche ?</h2>
        <ul>
            <li>✅ Rejoignez la communauté des CitySafe Angels et accédez aux Safe-Challenges.</li>
            <li>✅ Partagez du contenu inspirant et relayez les alertes et solutions de sécurité.</li>
            <li>✅ Animez votre réseau et engagez citoyens, commerces et entreprises dans des actions concrètes.</li>
        </ul>
    </section>

    <section class="cta">
        <h2>Prêt à faire entendre votre voix pour un monde plus sûr ?</h2>
        <p>Lancez votre Safe-Challenge maintenant !</p>
        <a id="create-challenge-btn" class="btn btn-primary btn-lg" href="/business/challenges/create">
                        Créer mon Challenge &#9997;
                    </a> <!-- Ajoutez ici le lien vers la page de création du challenge -->
    </section>
            </div>

@endsection
