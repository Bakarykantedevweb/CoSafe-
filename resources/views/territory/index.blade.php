@extends('layouts.territory')
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div
                class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                <div>
                    <h1 class="mb-0 h2 fw-bold">Tableau de Bord Territory Guardians</h1>
                </div>
                <div class="d-flex gap-3">
                    <div class="input-group">
                        <input class="form-control flatpickr" type="text" placeholder="Select Date"
                            aria-describedby="basic-addon2" />

                        <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                    </div>
                    <a href="#" class="btn btn-primary">Parametre</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row gy-4 mb-4">
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Gestion des offres</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">$10,800</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-success fw-semibold">
                                <i class="fe fe-trending-up me-1"></i>
                                +20.9$
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Gestion des utilisateurs</span>
                        </div>
                        <div>
                            <span class="fe fe-book-open fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">2,456</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-danger fw-semibold">120+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body d-flex flex-column gap-3">
                    <div class="d-flex align-items-center justify-content-between lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Statistiques</span>
                        </div>
                        <div>
                            <span class="fe fe-users fs-3 text-primary"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <h2 class="fw-bold mb-0">1,22,456</h2>
                        <div class="d-flex flex-row gap-2">
                            <span class="text-success fw-semibold">
                                <i class="fe fe-trending-up me-1"></i>
                                +1200
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
@endsection
