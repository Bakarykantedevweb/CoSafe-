@extends('layouts.city')
@section('content')
<section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Listes des Challenges</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('city/challenges/create') }}" class="btn btn-primary">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                        <h4 class="mb-0">Mes challenges</h4>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                id="courseDropdown1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                </a>
                            </span>
                        </span>
                    </div>
                    <!-- Table -->
                    <div class="mb-5">

            <div class="fs-4 fw-normal w-100 border border-primary rounded-1 py-2 px-4 mb-4">
                <h3 class="fs-4 h-4 text-secondary font-bold mb-3 text-center">
                Cette rubrique regroupe l’ensemble de vos Safe-Challenges.
                </h3>

                <div>
                                            <p class="mb-2">
                                            1- Valorisez votre employabilité et affinez votre social branding en publiant un post percutant sur les réseaux sociaux, en direction de votre communauté ou de recruteurs de notre communauté
                        </p>
                        <p class="mb-2">
                        2- Publiez votre propre Safe-Challenge pour impacter positivement la sécurité de notre environnement social et économique.
                        </p>
                                    </div>
            </div>

            <div class="d-flex align-items-center justify-content-around">


                <a class="btn btn-primary btn-lg" href="/city/challenges/posterintrodchallenge">
                    Créer un nouveau Challenge &#128108;
                </a>

                            </div>

        </div>

        <div class="mb-4">
            <div class="mb-4">
                <h3 class="h3 mb-2 text-primary">Mes Safe-Challenges lancés</h3>
                <p class="h6">Il s'agit ici de tous les challenges que vous avez créés.</p>
            </div>

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
                            <tbody>
                                @foreach ($challenges as $challenge)
                                    <tr>
                                        <td>
                                            <h5 class="mb-0">
                                                {{ $challenge->nomchallenge }}
                                            </h5>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">
                                                {{ $challenge->categorie }}
                                            </h5>
                                        </td>
                                        <td>
                                            <a href="#" class="text-inherit">{{ $challenge->datelancement }}</a>
                                        </td>
                                        <td>{{ $challenge->datecloture }}</td>
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                    role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                    <span class="dropdown-header">Settings</span>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-move dropdown-item-icon"></i>
                                                        Move
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-copy dropdown-item-icon"></i>
                                                        Copy
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                        Publish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                        Unpublish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                        Delete
                                                    </a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mb-4">
            <div class="mb-4">
                <h3 class="h3 mb-2 text-primary">Mes Challenges relevés</h3>
                <p class="h6">Il s'agit ici de tous les challenges que vous avez relevés.</p>
            </div>

                            <div class="bg-white pt-4">
                    <div class="table-responsive">
                        <table class="display text-center table" id="example1">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image Challenge</th>
                                    <th scope="col">Nom du Challenge</th>
                                    <th scope="col">Lieu du challenge</th>
                                    <th scope="col">Email de candidature</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Secteur</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                                            </tbody>
                        </table>
                    </div>
                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
