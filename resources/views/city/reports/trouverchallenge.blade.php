@extends('layouts.city')
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
        <div class="table-responsive border-0 overflow-y-hidden">
            <table class="table mb-0 text-nowrap table-hover table-centered">
                <thead class="table-light">
                    <tr>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Date Debut</th>
                        <th>Date Fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>

            </table>
            <div class="row mb-4">
                <div class="bg-white pt-4">
                    <div class="table-responsive">
                        <table class="display text-center table" id="example1">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Categorie</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
