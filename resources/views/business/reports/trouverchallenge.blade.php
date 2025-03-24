@extends('layouts.business')
@section('content')
<style>
       
        header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cta {
            text-align: center;
            padding: 15px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .form-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-container div {
            flex: 1 1 48%;
        }
        select, input, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }
        .alert-list {
            margin-top: 30px;
        }
        .alert-item {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }
    </style>

<header>
        <h1>Trouver une Safe-Alerte</h1>
        <p>Consultez les Alertes de sécurité signalées par la communauté</p>
    </header>

    <section class="container">
        <h2>Bienvenue dans la communauté CoSafe</h2>
        <p>Cette rubrique vous permet de consulter des Alertes de sécurité signalées par des citoyens, des collectivités, des commerces et d’autres acteurs locaux.</p>
        <p>Restez informé et vigilant !</p>

        <div class="cta">
            <p>Bienvenue dans la communauté CoSafe, un espace dédié aux citoyens engagés souhaitant suivre les incidents signalés en temps réel et contribuer à la sécurité collective.</p>
        </div>

        <h3>Comment ça marche ?</h3>
        <ul>
            <li>✅ Recherchez une alerte en filtrant par catégorie d’incident, lieu et date.</li>
            <li>✅ Consultez les détails des signalements pour évaluer la situation.</li>
            <li>✅ Réagissez, partagez l’Alerte le plus largement possible.</li>
        </ul>

        <h3>Consultez ci-dessous les Safe-Alertes selon vos critères</h3>
        
        <div class="form-container">
            <div>
                <label for="country">Pays</label>
                <select id="country">
                    <option value="france">France</option>
                    <option value="belgium">Belgique</option>
                    <option value="spain">Espagne</option>
                </select>
            </div>
            <div>
                <label for="city">Ville</label>
                <input type="text" id="city" placeholder="Entrez une ville">
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" id="date">
            </div>
            <div>
                <label for="category">Catégorie d’incident</label>
                <select id="category">
                    <option value="vol">Vol</option>
                    <option value="accident">Accident</option>
                    <option value="incendie">Incendie</option>
                </select>
            </div>
            <div>
                <label for="source">Source de l’Alerte</label>
                <select id="source">
                    <option value="citizen">Citoyen</option>
                    <option value="collectivity">Collectivité</option>
                    <option value="commerce">Commerce</option>
                </select>
            </div>
            <div style="flex: 1 1 100%; text-align: center;">
                <button>Chercher</button>
            </div>
        </div>

        <div class="alert-list">
            <h3>Alertes trouvées :</h3>
            <div class="alert-item">
                <h4>Incendie - Paris</h4>
                <p><strong>Date :</strong> 20 mars 2025</p>
                <p><strong>Source :</strong> Collectivité</p>
                <p><strong>Description :</strong> Un incendie a été signalé dans le 12ème arrondissement. Veuillez éviter la zone.</p>
                <button>Partager</button>
            </div>
        </div>
    </section>

@endsection
