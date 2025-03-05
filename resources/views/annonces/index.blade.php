@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>📢 Annonces d'entraide</h1>
    <a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">Publier une annonce</a>

    @foreach($annonces as $annonce)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $annonce->titre }}</h5>
                <p class="card-text">{{ Str::limit($annonce->description, 100) }}</p>
                <a href="{{ route('annonces.show', $annonce) }}" class="btn btn-info">Voir</a>
                @if(auth()->id() === $annonce->user_id)
                    <form action="{{ route('annonces.destroy', $annonce) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach

    {{ $annonces->links() }}
</div>
@endsection
