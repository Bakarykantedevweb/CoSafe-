@extends('layouts.territory')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        section {
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .step-list, .objectives-list {
            list-style: none;
            padding: 0;
        }
        .step-list li, .objectives-list li {
            margin: 10px 0;
        }
        .steps, .objectives {
            display: flex;
            flex-wrap: wrap;
        }
        .steps div, .objectives div {
            flex: 1 1 45%;
            margin: 10px;
        }
        .cta {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>

<section class="container">
    <h2>Comment ça marche ?</h2>
    <p>CoSafe est une plateforme citoyenne dédiée à la sécurisation des territoires grâce à une vigilance collective et une coopération renforcée entre habitants, collectivités et forces de l’ordre. Son fonctionnement repose sur un système permettant d’alerter, d’informer et d’agir en temps réel face aux menaces et incidents sécuritaires.</p>
    
    <div class="steps">
        <div>
            <h3>1. Inscription authentifiée</h3>
            <ul class="step-list">
                <li>Créez un compte authentifié</li>
                <li>Définissez votre zone de vigilance & choisissez les alertes.</li>
            </ul>
        </div>
        <div>
            <h3>2. Signalement Incidents</h3>
            <ul class="step-list">
                <li>Sélectionnez une catégorie</li>
                <li>Décrivez les faits</li>
                <li>Ajoutez des preuves : photos…</li>
            </ul>
        </div>
        <div>
            <h3>3. Consultation & Entraide</h3>
            <ul class="step-list">
                <li>Recevez des alertes</li>
                <li>Confirmez, commentez ou proposez une assistance.</li>
            </ul>
        </div>
        <div>
            <h3>4. Collaboration avec les autorités</h3>
            <ul class="step-list">
                <li>Certaines alertes sont relayées aux forces de l’ordre et la commune.</li>
                <li>Formation en sécurité citoyenne.</li>
            </ul>
        </div>
    </div>

    <h2>CoSafe, pour quels objectifs ?</h2>
    <ul class="objectives-list">
        <li>✅ Restez informé(e) des incidents signalés près de chez vous.</li>
        <li>✅ Adoptez les bons réflexes pour éviter les zones à risque.</li>
        <li>✅ Contribuez à la vigilance collective en confirmant ou infirmant un signalement.</li>
        <li>✅ Protégez vos proches et votre environnement en relayant les informations pertinentes.</li>
    </ul>

    <div class="cta">
        <p>🚨 Rejoignez CoSafe et contribuez à un environnement plus sûr ! 👮‍♂️</p>
    </div>
</section>
@endsection