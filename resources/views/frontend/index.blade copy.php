<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambassadeurs & Partenaires</title>
    <style>
        /* Styles généraux */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            animation: fadeIn 1s ease-in-out;
        }

        /* Bandeau d'en-tête */
        .header {
            display: flex;
            justify-content: space-around;
            background: #003366;
            color: white;
            padding: 15px;
            font-weight: bold;
            border-radius: 10px;
            animation: slideIn 1s ease-in-out;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: auto;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        /* Grille des programmes */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .box h2 {
            color: #007bff;
        }

        .box p {
            color: #555;
        }

        /* Section avec images */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .image-box {
            text-align: center;
            transform: scale(0.9);
            transition: transform 0.3s ease-in-out;
        }

        .image-box:hover {
            transform: scale(1);
        }

        .image-box img {
            width: 100%;
            border-radius: 10px;
            max-height: 150px;
            object-fit: cover;
        }

        .image-box p {
            font-weight: bold;
            margin-top: 10px;
            color: #003366;
        }

        /* Boutons CTA */
        .cta {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 12px 20px;
            margin-top: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .cta:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <div>1️⃣ VEILLEZ, PRÉVENEZ, PROTÉGEZ</div>
        <div>2️⃣ ALERTEZ – PROTÉGEZ – SOLIDARISEZ</div>
        <div>3️⃣ ASSUREZ LA SÉCURITÉ DE TOUS</div>
        <div>4️⃣ AGISSEZ POUR UN TERRITOIRE SÉCURISÉ</div>
    </div>

    <h1>Ambassadeurs & Partenaires</h1>

    <div class="container">
        <div class="grid">
            <div class="box">
                <h2>City Angel</h2>
                <p>Engagez-vous pour une ville plus sûre et solidaire.</p>
                <p>Veillez, protégez, assistez vos concitoyens.</p>
                <p>Faisons de notre ville un espace sécurisé d'entraide.</p>
            </div>
            <div class="box">
                <h2>Campus Angel</h2>
                <p>Engagez-vous, rejoignez la communauté solidaire.</p>
                <p>Veillez, protégez, aidez vos camarades.</p>
                <p>Faisons de notre campus un espace de confiance.</p>
            </div>
            <div class="box">
                <h2>Safy City</h2>
                <p>Unissons-nous pour une localité plus sûre et solidaire.</p>
                <p>Préservons, protégeons et accompagnons nos citoyens.</p>
                <p>Faisons de notre territoire un espace de confiance.</p>
            </div>
            <div class="box">
                <h2>Safy Business</h2>
                <p>Commerçants, Artisans ou Entreprises, Unissons-nous !</p>
                <p>Sécurisons-nous pour une économie locale plus sûre.</p>
                <p>Protégeons et accompagnons nos clients et partenaires.</p>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-box">
                <img src="https://via.placeholder.com/300x150" alt="City Angel">
                <p>impactez la vie locale</p>
                <a href="#" class="cta">Devenez Contributeur City Angel</a>
            </div>
            <div class="image-box">
                <img src="https://via.placeholder.com/300x150" alt="Campus Angel">
                <p>Agir pour le bien vivre en Campus</p>
                <a href="#" class="cta">Devenez Campus Angel</a>
            </div>
            <div class="image-box">
                <img src="https://via.placeholder.com/300x150" alt="Safy City">
                <p>Sécurisez votre territoire</p>
                <a href="#" class="cta">Devenez Safy City</a>
            </div>
            <div class="image-box">
                <img src="https://via.placeholder.com/300x150" alt="Safy Business">
                <p>Protégez votre Business</p>
                <a href="#" class="cta">Devenez Entreprise Safy Business</a>
            </div>
        </div>
    </div>

</body>
</html>
