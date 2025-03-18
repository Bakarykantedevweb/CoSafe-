<?php

namespace App\Http\Controllers\Territory;

use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TerritoryChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::where('territory_id', Auth::guard('territory')->user()->id)->get();
        return view('territory.challenges.index', compact('challenges'));
    }

    public function create()
    {
        return view('territory.challenges.create');
    }

    public function store(Request $request)
    {

        // Validation des champs avec messages d'erreur personnalisés

        try {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'numero' => 'required|string|max:20',
                'pays' => 'required|string|max:100',
                'region' => 'required|string|max:100',
                'ville' => 'required|string|max:100',
                'codepostal' => 'required|string|max:20',
                'adresse' => 'required|string|max:255',
                'nomchallenge' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'type' => 'required|string',
                'secteurs' => 'required|string',
                'description' => 'nullable|string',
                'fichier' => 'required|file|mimes:doc,docx,pdf|max:5120',
                'critere' => 'required|string|max:255',
                'conditions' => 'required|file|mimes:doc,docx,pdf|max:5120',
                'dotation' => 'required|string',
                'payschallenge' => 'required|string|max:100',
                'villechallenge' => 'required|string|max:100',
                'campus' => 'required|string|max:100',
                'datelancement' => 'required|date',
                'datecloture' => 'required|date|after:datelancement',
            ], [
                'datecloture.after' => 'La date de clôture doit être postérieure à la date de lancement.',
                'accepte_conditions.accepted' => 'Vous devez accepter les conditions générales.',
            ]);
            // Création d'une nouvelle instance de Challenge
            $challenge = new Challenge();

            // Assignation des données validées au modèle
            $challenge->fill($validatedData);

            // Gestion des fichiers
            $challenge->image = $this->uploadFile($request->file('image'), 'uploads/challenges/image', 'image');
            $challenge->fichier = $this->uploadFile($request->file('fichier'), 'uploads/challenges/fichier', 'fichier');
            $challenge->conditions = $this->uploadFile($request->file('conditions'), 'uploads/challenges/conditions', 'conditions');

            // Assignation de l'ID du business connecté
            $challenge->territory_id = Auth::guard('territory')->user()->id;

            // Sauvegarde du challenge
            $challenge->save();

            // Redirection avec message de succès
            return redirect('territory/challenges')->with('success', 'Le challenge a été créé avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, redirection avec message d'erreur

            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création du challenge : ' . $e->getMessage());
        }
    }

    private function uploadFile($file, $destinationPath, $prefix)
    {
        if ($file && $file->isValid()) {
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_' . $prefix . '.' . $ext;
            $file->move(public_path($destinationPath), $filename);
            return $filename;
        }
        return null;
    }
}
