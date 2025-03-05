@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Liste des Signalements</h2>
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
@endsection
