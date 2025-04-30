@extends('layouts.territory')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
        }
        .description {
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .steps-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        .step-column {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .step-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
            font-size: 18px;
        }
        .step-list {
            padding-left: 20px;
        }
        .step-list li {
            margin-bottom: 8px;
            list-style-type: '- ';
        }
        .objectives {
            margin: 30px 0;
        }
        .objectives-title {
            font-weight: bold;
            margin-bottom: 15px;
            color: #2c3e50;
            font-size: 18px;
        }
        .objective-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .checkbox {
            margin-right: 10px;
            color: #27ae60;
            font-weight: bold;
        }
        .cta {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background-color: #2c3e50;
            color: white;
            border-radius: 5px;
        }
        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
    </style>

    <div class="container">
        <h1>Comment ça marche ?</h1>
        
        <div class="description">
            CoSafe est une plateforme citoyenne dédiée à la sécurisation des territoires grâce à une vigilance collective et une coopération renforcée entre habitants, collectivités et forces de l'ordre.<br>
            Son fonctionnement repose sur un système permettant d'alerter, d'informer et d'agir en temps réel face aux menaces et incidents sécuritaires.
        </div>

        <div class="steps-grid">
            <div class="step-column">
                <div class="step-title">1. Inscription authentifiée</div>
                <ul class="step-list">
                    <li>Créez un compte authentifié</li>
                    <li>Définissez vos besoins de vigilance</li>
                </ul>
            </div>
            
            <div class="step-column">
                <div class="step-title">2. Signalement Incidents</div>
                <ul class="step-list">
                    <li>Sélectionnez une catégorie</li>
                    <li>Décrivez les faits (Ajoutez des preuves : photos)</li>
                </ul>
            </div>
            
            <div class="step-column">
                <div class="step-title">3. Consultation & Entraide</div>
                <ul class="step-list">
                    <li>Recevez des Alertes</li>
                    <li>Confirmez, commentez ou assistez.</li>
                </ul>
            </div>
            
            <div class="step-column">
                <div class="step-title">4. Collaboration avec les autorités</div>
                <ul class="step-list">
                    <li>Relayez aux forces de l'ordre et la commune</li>
                    <li>Trouvez et Proposez des Formations en sécurité</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="objectives">
            <div class="objectives-title">CoSafe, pour quels objectifs ?</div>
            
            <div class="objective-item">
                <span class="checkbox">✅</span> Restez informé(e) des incidents signalés près de chez vous.
            </div>
            <div class="objective-item">
                <span class="checkbox">✅</span> Adoptez les bons réflexes pour éviter les zones à risque.
            </div>
            <div class="objective-item">
                <span class="checkbox">✅</span> Contribuez à la vigilance collective en participant activement.
            </div>
            <div class="objective-item">
                <span class="checkbox">✅</span> Protégez vos proches et votre territoire en relayant les informations.
            </div>
        </div>

        <hr>

        <div class="cta">
            [Réjoignez CoSafe et contribuez à un environnement plus sûr !]
        </div>
    </div>
@endsection