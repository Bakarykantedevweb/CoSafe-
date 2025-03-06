@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>📩 Vos Messages</h1>
    @foreach($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <p><strong>De :</strong> {{ $message->sender->name }}</p>
                <p>{{ $message->message }}</p>
                <p><small>Envoyé le : {{ $message->created_at->format('d/m/Y H:i') }}</small></p>
            </div>
        </div>
    @endforeach
</div>
@endsection
