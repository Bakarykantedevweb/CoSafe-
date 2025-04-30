@extends('layouts.campus')
@section('content')
<style>

        header {

            padding: 20px;
            text-align: center;
        }
        section {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }


    </style>
<header>
    <h1>CoSafe - Répondre à un Appel à l'Aide</h1>
</header>
<section>
    <h2>Vous souhaitez apporter votre aide à un membre de la communauté ?</h2>
    <p>Cette rubrique permet de consulter et répondre de manière citoyenne aux Appels à l’aide des citoyens, des collectivités, des commerces et d’autres acteurs locaux. Faites la différence avec un engagement impactant !</p>

    <h3>Restez informé et vigilant !</h3>
    <p>Bienvenue dans la communauté CoSafe, un espace dédié aux citoyens engagés souhaitant suivre les incidents signalés en temps réel et contribuer à la sécurité collective.</p>

    <h3>Comment ça marche ?</h3>
    <ul>
        <li>✅ Consultez les appels à l’aide en filtrant par catégorie, lieu et date.</li>
        <li>✅ Répondez en proposant votre aide.</li>
        <li>✅ Réagissez, partagez l’Appel à l’aide le plus largement possible.</li>
    </ul>

    <h3>Consultez ci-dessous les Appels à l’aide selon vos critères</h3>

    <div class="filter-container">
        <form action="#" method="GET">
            <label for="category">Catégorie :</label>
            <select id="category" name="category">
                <option value="santé">Santé</option>
                <option value="sécurité">Sécurité</option>
                <option value="logement">Logement</option>
                <option value="autre">Autre</option>
            </select>

            <label for="location">Lieu :</label>
            <input type="text" id="location" name="location" placeholder="Ville ou quartier">

            <label for="date">Date :</label>
            <input type="date" id="date" name="date">

            <button type="submit">Filtrer les appels</button>
        </form>
    </div>

    <div class="call-list">
        <div class="call-item">
            <h4>Appel à l’aide #1 - Sécurité</h4>
            <p><strong>Lieu :</strong> Paris, 15e arrondissement</p>
            <p><strong>Description :</strong> Une personne a été agressée, besoin de témoins et d’aide pour contacter les autorités.</p>
            <button>Répondre à l'appel</button>
        </div>

        <div class="call-item">
            <h4>Appel à l’aide #2 - Logement</h4>
            <p><strong>Lieu :</strong> Lyon, Centre-ville</p>
            <p><strong>Description :</strong> Recherche de bénévoles pour aider à déménager un senior.</p>
            <button>Répondre à l'appel</button>
        </div>

        <div class="call-item">
            <h4>Appel à l’aide #3 - Santé</h4>
            <p><strong>Lieu :</strong> Marseille, 8e arrondissement</p>
            <p><strong>Description :</strong> Besoin de dons de sang en urgence pour un hôpital local.</p>
            <button>Répondre à l'appel</button>
        </div>
    </div>
    <section class="cta">

        <a id="create-challenge-btn" class="btn btn-primary btn-lg" href="/campus/reports/create">
                        Créer un incident  &#9997;
                    </a> <!-- Ajoutez ici le lien vers la page de création du challenge -->
    </section>
</section>

@endsection
