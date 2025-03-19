@extends('layouts.city')
@section('content')
<style>

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .container ul {
            list-style-type: none;
            padding: 0;
        }
        .container ul li {
            background: #e7e7e7;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .container .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
 <div class="container">
        <h1>Trouver un Safe-Challenge</h1>
        <p>Cette rubrique vous permet de trouver des Safe-Challenges qui sont proposés par des entreprises, commerces, localités et autres acteurs économiques et sociaux.</p>

        <h2>Transformez votre Talent en Opportunité !</h2>
        <p>Bienvenue dans la Communauté des Safe-Challengers, l’espace dédié aux Angels-Talents souhaitant résoudre des problématiques stratégiques et innover en matière de protection via des Safe-Challenges.</p>

        <h2>Pourquoi relever un Safe-Challenge ?</h2>
        <ul>
            <li>✅ Valorisez votre expertise en sécurité dans un cadre innovant et engagé.</li>
            <li>✅ Collaborez avec des entreprises et territoires engagés pour un environnement plus sûr.</li>
            <li>✅ Trouvez des opportunités professionnelles alignées avec vos valeurs et votre engagement citoyen.</li>
            <li>✅ Expérimentez et développez vos compétences sur des défis concrets de sécurisation.</li>
        </ul>

        <h2>Comment ça marche ?</h2>
        <ul>
            <li>✅ Consultez les Appels à Safe-Solutions ouverts.</li>
            <li>✅ Proposez votre expertise via une solution innovante.</li>
            <li>✅ Travaillez sur des projets concrets pour sécuriser les territoires.</li>
        </ul>

        <h2>Prêt à relever un défi ?</h2>
        <p>Consultez ci-dessous les Safe-Challenges selon vos critères.</p>
        <a href="#" class="btn btn-primary btn-lg">Voir les Safe-Challenges</a>
    </div>

@endsection
