<!-- resources/views/challenges/index.blade.php -->
<h1>Challenges</h1>
<ul>
    @foreach ($challenges as $challenge)
        <li><a href="{{ route('challenges.show', $challenge->id) }}">{{ $challenge->title }}</a></li>
    @endforeach
</ul>
@if(Gate::allows('manage-challenges'))
   <button>Créer un challenge</button>
@endif

@if(Gate::allows('validate-submission'))
   <button>Valider la soumission</button>
@endif
