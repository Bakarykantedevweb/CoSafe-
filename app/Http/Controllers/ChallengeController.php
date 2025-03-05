<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    //

    public function index()
{
    $challenges = Challenge::all();
    return view('challenges.index', compact('challenges'));
}

public function show($id)
{
    $challenge = Challenge::findOrFail($id);
    return view('challenges.show', compact('challenge'));
}

public function submit(Request $request, $id)
{
    $challenge = Challenge::findOrFail($id);

    // Validation du code soumis
    $validated = $request->validate([
        'code' => 'required|string',
    ]);

    // Création de la soumission
    Submission::create([
        'challenge_id' => $challenge->id,
        'user_id' => auth()->id(),
        'code' => $request->code,
        'status' => 'pending',
    ]);

    return redirect()->route('challenges.show', $id)->with('success', 'Votre soumission a été reçue.');
}

}
