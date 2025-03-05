@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>📝 Publier une annonce</h1>
    <form action="{{ route('annonces.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <select name="categorie" class="form-control" required>
                <option value="covoiturage">🚗 Covoiturage</option>
                <option value="garde_enfants">👶 Garde d'enfants</option>
                <option value="cours_gratuits">📚 Cours gratuits</option>
                <option value="assistance_personnes_agees">👵 Assistance aux personnes âgées</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Localisation (optionnel)</label>
            <input type="text" name="localisation" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact (optionnel)</label>
            <input type="text" name="contact" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Publier</button>
    </form>
</div>
@endsection
