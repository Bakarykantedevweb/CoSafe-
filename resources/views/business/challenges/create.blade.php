@extends('layouts.business')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Ajouter un Challenge</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('challenges/reports') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-12 col-xl-12 col-md-12 col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body p-lg-6">
                            <!-- form -->
                            <form method="POST" action="{{ url('business/challenges/create') }}" enctype="multipart/form-data" class="row gx-3 needs-validation">
                                @csrf
                                @method('POST')
                                <!-- form group -->
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Categorie
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="categorie" class="form-select" id="">
                                        <option value="">---</option>
                                        <option value="sécurité">Sécurité</option>
                                        <option value="prévention">Prévention</option>
                                        <option value="cohésion sociale">Cohésion Sociale</option>
                                    </select>
                                    @error('categorie')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Titre
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="titre" class="form-control" required />
                                    @error('titre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Date debut
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" name="start_date" class="form-control" required />
                                    @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Date Fin
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" name="end_date" class="form-control" required />
                                    @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- form group -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="" rows="3" required></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-8"></div>
                                <!-- button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas"
                                        aria-label="Close">
                                        Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
