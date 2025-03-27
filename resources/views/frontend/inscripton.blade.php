

@extends('layouts.frontend')
@section('contend')
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
        footer {
    background-color: #222;
    color: white;
    padding: 40px 20px;
    text-align: left;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    margin: 10px 20px;
}

.footer-column h3 {
    font-size: 18px;
    margin-bottom: 15px;
    border-bottom: 2px solid #ffcc00;
    padding-bottom: 5px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 8px;
}

.footer-column ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.footer-column ul li a:hover {
    color: #ffcc00;
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-column {
        text-align: center;
        margin-bottom: 20px;
    }

    .footer-column h3 {
        border-bottom: none;
    }
}
/* Style du header */
header {
    background: url('back.png') no-repeat center center/cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    position: relative;
}

/* Conteneur du texte */
.header-container {
    background: rgba(255, 255, 255, 0.8);
    padding: 15px 30px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
}

/* Titres */
h1 {
    font-size: 28px;
    font-weight: bold;
    color: #222;
}

h2 {
    font-size: 18px;
    font-weight: normal;
    color: #444;
    margin-bottom: 15px;
}

/* Boîte d'alerte */
.alert-box {
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
}

.alert-box h3 {
    font-size: 24px;
    font-weight: bold;
    color: red;
}

.alert-box p {
    font-size: 16px;
    color: black;
}


    </style>
</head>
<body>
    <main>
        <section class="image-grid">
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-05.jpg') }}" alt="Impactez la vie locale" class="img-fluid">
                <p>Impactez la vie locale</p>
                <a href="{{ url('city/register') }}" class="cta">Devenez Contributeur City Angel</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="Agir pour le bien vivre en Campus" class="img-fluid">
                <p>Agir pour le bien vivre en Campus</p>
                <a href="{{ url('campus/register') }}" class="cta">Devenez Campus Angel</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="Sécurisez votre territoire" class="img-fluid">
                <p>Sécurisez votre territoire</p>
                <a href="{{ url('territory/register') }}" class="cta">Devenez Safy City</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('front/assets/images/blog/img-07.jpg') }}" alt="Protégez votre Business" class="img-fluid">
                <p>Protégez votre Business</p>
                <a href="{{ url('business/register') }}" class="cta">Devenez Entreprise Safy Business</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>MENTIONS LÉGALES</h3>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Objectifs & valeurs sociales</a></li>
                    <li><a href="#">Pourquoi nous rejoindre ?</a></li>
                    <li><a href="#">Confidentialité & CGU</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE BUSINESS</h3>
                <ul>
                    <li><a href="#">Devenir Safy Commerçant</a></li>
                    <li><a href="#">Devenir Safy Entreprise</a></li>
                    <li><a href="#">Alertez, Protégez, Solidarisez vos collaborateurs</a></li>
                    <li><a href="#">Initiez des partenariats Écoles-Entreprises</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE PROMOTEURS</h3>
                <ul>
                    <li><a href="#">Devenez Promoteur de territoire sécurisé</a></li>
                    <li><a href="#">Boostez votre économie avec un territoire sécurisé</a></li>
                    <li><a href="#">Lancez des Safe-Challenges pour mobiliser</a></li>
                    <li><a href="#">Initiez des partenariats transfrontaliers</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>ESPACE CITOYENS</h3>
                <ul>
                    <li><a href="#">Devenez City Angel</a></li>
                    <li><a href="#">Devenez Campus Angel</a></li>
                    <li><a href="#">Relevez des Safe-Challenges</a></li>
                    <li><a href="#">Lancez des Safe-Challenges</a></li>
                </ul>
            </div>
        </div>
    </footer>
    @endsection
