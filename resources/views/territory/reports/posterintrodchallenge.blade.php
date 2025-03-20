@extends('layouts.territory')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: white;
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

<section>
    <h2>Vous êtes témoin ou victime d’un incident ?</h2>
    <p>CoSafe vous permet de le signaler en quelques étapes pour alerter la communauté et, si nécessaire, les autorités compétentes. Votre vigilance contribue à la sécurité de tous.</p>

    <h3>Pourquoi signaler un incident ?</h3>
    <ul>
        <li>✅ Prévenir les habitants et les forces de l’ordre en temps réel.</li>
        <li>✅ Renforcer la sécurité collective en partageant des informations utiles.</li>
        <li>✅ Limiter les risques en aidant à identifier les menaces et comportements suspects.</li>
    </ul>

    <h3>Comment signaler un incident ?</h3>
    <p>Remplissez le formulaire ci-dessous avec les informations suivantes : Seul votre pseudo apparaitra publiquement.</p>
</section>
@endsection
