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
        <h1>Support Challengers</h1>
        <p><span class="highlight">Votre Espace de Communication avec les Safe-Challengers</span></p>
        <p>Cette rubrique centralise tous vos échanges et interactions avec les Safe-Challengers ayant répondu à vos appels à solutions sécuritaires.</p>
        <p>💬 Facilitez la coordination et le suivi de vos Safe-Challenges en accédant à l’historique de vos discussions et en partageant des informations clés avec les participants.</p>
        <p><strong>Optimisez l'impact de votre Safe-Challenge !</strong></p>
        <ul>
            <li>✅ Répondez rapidement aux propositions et affinez les solutions en collaboration avec les Safe-Talents.</li>
            <li>✅ Apportez des précisions stratégiques pour guider les participants vers des actions concrètes adaptées à votre territoire.</li>
            <li>✅ Encouragez l’engagement et la motivation en valorisant les contributions et en maintenant une communication fluide.</li>
        </ul>
        <p>🚀 Pilotez efficacement vos initiatives de sécurisation et créez une dynamique collective forte !</p>
        <div class="cta">Accéder à votre espace</div>
    </div>
    @endsection
