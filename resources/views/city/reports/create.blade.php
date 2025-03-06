@extends('layouts.city')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Ajouter un Signalement</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('city/reports') }}" class="btn btn-primary">Retour</a>
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
                            <form method="POST" action="{{ url('city/reports/create') }}" enctype="multipart/form-data" class="row gx-3 needs-validation">
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
                                        <option value="Violence">Violence</option>
                                        <option value="Dégradation">Dégradation</option>
                                        <option value="Nuisance">Nuisance</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Titre
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="title" class="form-control" required />
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Latitude
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="latitude" class="form-control" required />
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">
                                        Longitude
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="longitude" class="form-control" required />
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">
                                        Photo
                                    </label>
                                    <input type="file" name="photo" class="form-control" />
                                </div>
                                <!-- form group -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="" rows="3" required></textarea>
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
