@extends('layouts.territory')
@section('content')
<
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: auto; }
        h2 { color: #2c3e50; }
        .filter-form { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px; }
        .filter-form select, .filter-form input, .filter-form button {
            padding: 8px;
            font-size: 16px;
        }
        .help-list { border-top: 2px solid #ccc; margin-top: 20px; padding-top: 10px; }
        .help-item { padding: 10px; border-bottom: 1px solid #ddd; }
    </style>
    <div class="container">
        <h2>Répondre à un Appel à l’Aide</h2>
        <p>Vous souhaitez apporter votre aide à un membre de la communauté ?</p>
        <p>Cette rubrique permet de consulter et répondre de manière citoyenne aux appels à l’aide des citoyens, collectivités, commerces et autres acteurs locaux.</p>

        <h3>Comment ça marche ?</h3>
        <ul>
            <li>✅ Consultez les appels à l’aide en filtrant par catégorie, lieu et date.</li>
            <li>✅ Répondez en proposant votre aide.</li>
            <li>✅ Réagissez et partagez l’appel à l’aide le plus largement possible.</li>
        </ul>

        <h3>Consultez les appels à l’aide</h3>
        <form class="filter-form">
            <select name="pays">
                <option value="">Pays</option>
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
            </select>
            <input type="text" name="ville" placeholder="Ville">
            <input type="date" name="date">
            <select name="categorie">
                <option value="">Catégories d’aide</option>
                <option value="Secours">Secours</option>
                <option value="Aide sociale">Aide sociale</option>
                <option value="Soutien psychologique">Soutien psychologique</option>
            </select>
            <button type="submit">Chercher</button>
        </form>

        <div class="help-list">
            <div class="help-item">
                <strong>Ville:</strong> Paris | <strong>Date:</strong> 21/03/2025 | <strong>Catégorie:</strong> Secours
                <p><em>Besoin urgent d’aide pour une personne âgée en difficulté.</em></p>
                <button>Répondre</button>
            </div>
        </div>
    </div>
</body>
</html>
