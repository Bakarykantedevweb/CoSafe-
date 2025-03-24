@extends('layouts.business')
@section('content')
<section class="container-fluid p-4">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Style général */
      
        .container {
            max-width: 900px;
            background: white;
           
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        h1, h2 {
            color: #003366;
            text-align: center;
        }

        /* Effets d’animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Effets de liste avec icônes */
        .list-group-item {
            background: #eef2ff;
            border: none;
            font-size: 18px;
            transition: all 0.3s ease-in-out;
        }

        .list-group-item:hover {
            background: #d6d6f7;
            transform: scale(1.02);
        }

        /* Bouton CTA */
        .btn-primary {
            background: #007BFF;
            border: none;
            transition: all 0.3s ease-in-out;
            font-size: 18px;
            padding: 12px 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .icon {
            color: #007BFF;
            font-size: 22px;
            margin-right: 10px;
        }

    </style>
 
 <div class="container mt-5">
        <h1 class="fade-in"><i class="fa-solid fa-shield-halved"></i> Trouver un Safe-Challenge</h1>
        <p class="text-center fade-in">Découvrez des défis de sécurité proposés par des entreprises et collectivités.</p>

        <h2 class="mt-4 fade-in"><i class="fa-solid fa-lightbulb"></i> Transformez votre Talent en Opportunité !</h2>
        <p class="fade-in">Rejoignez la communauté des Safe-Challengers et mettez vos compétences au service de la sécurité.</p>

        <h2 class="mt-4 fade-in"><i class="fa-solid fa-trophy"></i> Pourquoi relever un Safe-Challenge ?</h2>
        <ul class="list-group">
            <li class="list-group-item fade-in"><i class="fa-solid fa-check icon"></i> Valorisez votre expertise en sécurité.</li>
            <li class="list-group-item fade-in"><i class="fa-solid fa-users icon"></i> Collaborez avec des entreprises et territoires engagés.</li>
            <li class="list-group-item fade-in"><i class="fa-solid fa-briefcase icon"></i> Trouvez des opportunités alignées avec vos valeurs.</li>
            <li class="list-group-item fade-in"><i class="fa-solid fa-cogs icon"></i> Développez vos compétences sur des défis concrets.</li>
        </ul>

        <h2 class="mt-4 fade-in"><i class="fa-solid fa-gears"></i> Comment ça marche ?</h2>
        <ul class="list-group">
            <li class="list-group-item fade-in"><i class="fa-solid fa-search icon"></i> Consultez les Appels à Safe-Solutions.</li>
            <li class="list-group-item fade-in"><i class="fa-solid fa-bullhorn icon"></i> Proposez votre expertise et solutions.</li>
            <li class="list-group-item fade-in"><i class="fa-solid fa-handshake icon"></i> Travaillez sur des projets concrets.</li>
        </ul>

        <h2 class="mt-4 fade-in"><i class="fa-solid fa-rocket"></i> Prêt à relever un défi ?</h2>
        <p class="fade-in">Consultez ci-dessous les Safe-Challenges selon vos critères.</p>
        <div class="text-center">
            <a href="#" class="btn btn-primary fade-in"><i class="fa-solid fa-list-check"></i> Voir les Safe-Challenges</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation d’apparition progressive au scroll
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".fade-in");
            
            function fadeInOnScroll() {
                elements.forEach(element => {
                    const position = element.getBoundingClientRect().top;
                    const screenHeight = window.innerHeight;
                    
                    if (position < screenHeight - 100) {
                        element.classList.add("visible");
                    }
                });
            }

            window.addEventListener("scroll", fadeInOnScroll);
            fadeInOnScroll();
        });
    </script>
</section>
@endsection
