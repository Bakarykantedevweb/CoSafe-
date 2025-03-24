<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme Sécurisée</title>
    <style>
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Conteneur principal */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        /* Bloc des cartes */
        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box h2 {
            color: #007bff;
        }

        .box p {
            color: #555;
        }

        /* Boutons CTA */
        .cta {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .cta:hover {
            background: #0056b3;
        }

        /* Responsive : Ajustements pour tablettes et mobiles */
        @media (max-width: 1024px) {
            .container {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .box {
                width: 90%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>

    <h1>Engagez-vous pour une ville plus sûre et solidaire</h1>

    <div class="container">
        <div class="box">
            <h2>City Angel</h2>
            <p>Veillez, protégez, assistez vos concitoyens.</p>
            <a href="#" class="cta">Devenez City Angel</a>
        </div>
        <div class="box">
            <h2>Campus Angel</h2>
            <p>Veillez, protégez, aidez vos camarades.</p>
            <a href="#" class="cta">Devenez Campus Angel</a>
        </div>
        <div class="box">
            <h2>Safy City</h2>
            <p>Préservons, protégeons, et accompagnons nos citoyens.</p>
            <a href="#" class="cta">Devenez Safy City</a>
        </div>
        <div class="box">
            <h2>Safy Business</h2>
            <p>Sécurisons-nous pour une économie locale plus sûre.</p>
            <a href="#" class="cta">Devenez Safy Business</a>
        </div>
    </div>

</body>
</html>
