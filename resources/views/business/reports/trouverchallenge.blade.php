@extends('layouts.business')
@section('content')
    <style>
      
        header {
        
            padding: 10px 0;
            text-align: center;
        }
      
        section {
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .cta {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        .form-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-container div {
            flex: 1 1 48%;
        }
        select, input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
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
                <!-- Ajouter d'autres options ici -->
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
                <!-- Ajouter d'autres catégories ici -->
            </select>
        </div>
        <div>
            <label for="source">Source de l’Alerte</label>
            <select id="source">
                <option value="citizen">Citoyen</option>
                <option value="collectivity">Collectivité</option>
                <option value="commerce">Commerce</option>
                <!-- Ajouter d'autres sources ici -->
            </select>
        </div>
        <div style="flex: 1 1 100%; text-align: center;">
            <button style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Chercher</button>
        </div>
    </div>
    <section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div
                class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                <div>
                    <h1 class="mb-0 h2 fw-bold">Listes des Signalements</h1>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ url('business/reports/create') }}" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
            <div class="card my-3">
            <div class="alert-list">
        <h3>Alertes trouvées :</h3>
        <!-- Exemple d'alerte -->
        <div class="alert-item">
            <h4>Incendie - Paris</h4>
            <p><strong>Date :</strong> 20 mars 2025</p>
            <p><strong>Source :</strong> Collectivité</p>
            <p><strong>Description :</strong> Un incendie a été signalé dans le 12ème arrondissement. Veuillez éviter la zone.</p>
            <button style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 5px;">Partager</button>
        </div>
        <!-- Ajouter d'autres alertes ici -->
    </div>
            </div>
        
    </div>
</section>
    
</section>

@endsection
