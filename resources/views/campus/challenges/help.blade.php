@extends('layouts.campus')
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
        ul {
            list-style-type: none;
            padding: 0;
        }
       .container ul li {
            background: #e7e7e7;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
<div class="container">
        <h1>Un Safe-Challenge, c'est quoi ?</h1>
        <p>Un Safe-Challenge est un défi collaboratif lancé par une entreprise, une collectivité ou un acteur territorial (campus Guardian, campus Guardian, Social Promoter) pour renforcer la sécurité des biens, des personnes et des territoires.</p>

        <h2>Pour quel Objectif ?</h2>
        <p>Mobiliser les Safe Talents (campus Angels, Campus Angels, experts en sécurité, citoyens engagés) pour proposer des solutions innovantes et opérationnelles aux enjeux sécuritaires.</p>

        <h2>Exemples de Safe-Challenges :</h2>
        <ul>
            <li>🔹 Sécurisation des commerces et entreprises : prévention des vols et agressions</li>
            <li>🔹 Protection des citoyens et des espaces publics : application d’alerte, mobilisation citoyenne.</li>
            <li>🔹 Lutte contre le harcèlement et les violences</li>
            <li>🔹 Cybersécurité et protection des données</li>
            <li>🔹 Prévention des risques environnementaux et climatiques</li>
        </ul>

        <a href="trouver-safe-challenge.html" class="btn btn-primary btn-lg">Prêt-e à relever un Safe-Challenge ? Cliquez ICI</a>
    </div>

@endsection
