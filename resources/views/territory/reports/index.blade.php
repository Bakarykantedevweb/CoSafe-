@extends('layouts.territory')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div
                class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                <div>
                    <h1 class="mb-0 h2 fw-bold">Listes des Signalements</h1>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ url('territory/reports/create') }}" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach ($reports as $report)
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $report->title }}</h5>
                    <p class="card-text">{{ $report->description }}</p>
                    @if ($report->photo)
                        <img src="{{ asset('uploads/reports/photos/' . $report->photo) }}" width="100"
                            class="img-fluid" alt="Image du signalement">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="container-fluid p-4">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card header -->
                <div
                    class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                    <h4 class="mb-0">Mes Signalements</h4>

                </div>
                <!-- Table -->
                <div class="mb-5">



                    <div class="d-flex align-items-center justify-content-around">


                        <a class="btn btn-primary btn-lg" href="{{ url('territory/reports/create') }}">
                            Créer un nouveau Signalement &#128108;
                        </a>

                    </div>

                </div>

                <div class="mb-4">
                    <div class="mb-4">
                        <h3 class="h3 mb-2 text-primary">Listes des Signalements</h3>
                        <p class="h6">Il s'agit ici de tous les Signalements que vous avez créés.</p>
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

                </table>
                <div class="row mb-4">
                    <div class="mb-4">
                        <h3 class="h3 mb-2 text-primary">Mes Signalements relevés</h3>
                        <p class="h6">Il s'agit ici de tous les challenges que vous avez relevés.</p>
                    </div>

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
        </div>
    </div>
    </div>
</section>
@endsection
