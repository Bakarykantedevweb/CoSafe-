@extends('layouts.campus')
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
                    <a href="{{ url('campus/reports/create') }}" class="btn btn-primary">Ajouter</a>
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
                        <img src="{{ asset('uploads/reports/photos/' . $report->photo) }}" width="70" class="img-fluid" alt="Image du signalement">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
