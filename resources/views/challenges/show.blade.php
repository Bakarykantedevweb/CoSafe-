<!-- resources/views/challenges/show.blade.php -->
<h1>{{ $challenge->title }}</h1>
<p>{{ $challenge->description }}</p>

<form action="{{ route('challenges.submit', $challenge->id) }}" method="POST">
    @csrf
    <textarea name="code" required></textarea>
    <button type="submit">Soumettre</button>
</form>
