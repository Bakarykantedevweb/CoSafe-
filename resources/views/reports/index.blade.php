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
    <div class="container">
        @foreach ($reports as $report)
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $report->title }}</h5>
                    <p class="card-text">{{ $report->description }}</p>
                    @if ($report->media)
                        @if (Str::endsWith($report->media, ['.jpg', '.jpeg', '.png']))
                            <img src="{{ asset('storage/' . $report->media) }}" class="img-fluid" alt="Image du signalement">
                        @else
                            <video controls width="100%">
                                <source src="{{ asset('storage/' . $report->media) }}" type="video/mp4">
                                Votre navigateur ne supporte pas les vidéos.
                            </video>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
