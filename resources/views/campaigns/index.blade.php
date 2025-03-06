@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tableau de bord des campagnes</h1>
    <a href="{{ route('campaigns.create') }}" class="btn btn-primary mb-3">Créer une nouvelle campagne</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Statut</th>
                <th>Budget</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campaigns as $campaign)
            <tr>
                <td>{{ $campaign->title }}</td>
                <td>{{ ucfirst($campaign->status) }}</td>
                <td>{{ $campaign->budget }}€</td>
                <td>
                    <a href="{{ route('campaigns.show', $campaign->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('campaigns.edit', $campaign->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
