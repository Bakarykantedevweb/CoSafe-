@if(auth()->id() !== $annonce->user_id)
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $annonce->user_id }}">
        <textarea name="message" class="form-control" placeholder="Votre message..." required></textarea>
        <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
    </form>
@endif
