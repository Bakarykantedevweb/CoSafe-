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
        require  __DIR__.'/villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('territory.challenges.create',[
            "villes_belgique" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
            ]);
    }



    public function helps()
    {

        $challenges = Challenge::where('territory_id', Auth::guard('territory')->user()->id)->get();
       return view('territory.challenges.help', compact('challenges'));
    }

    public function trouverchallenge()
    {

        $challenges = Challenge::where('territory_id', Auth::guard('territory')->user()->id)->get();
        return view('territory.challenges.trouverchallenge', compact('challenges'));
    }


    public function descriptionchallenge(Challenge $challenge) {
        $user = Auth::guard('territory')->user()->id;

        $challenge = Challenge::where('id', $challenge->id)->first();
        return view('territory.challenges.description', ['challenge' => $challenge]);
    }

    public function posterintrodchallenge()
    {
        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('territory.challenges.posterintrodchallenge',[
            "villes_belgique" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
            ]);
    }
    public function store(Request $request)
    {
        // Validation des champs avec messages d'erreur personnalisés
        try {
            $validatedData = $request->validate([
                // Informations personnelles du contact
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
                'datefininscription.after' => 'La date de fin des inscriptions doit être postérieure à la date de début.',
                'datefinselection.after' => 'La date de fin des sélections doit être postérieure à la date de début.',
                'nombreequipesmax.gt' => 'Le nombre maximum d\'équipes doit être supérieur au nombre minimum.',
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
            $challenge->terriroty_id = Auth::guard('terriroty')->user()->id;
    
            // Sauvegarde du challenge
            $challenge->save();
    
            // Redirection avec message de succès
            return redirect('terriroty/challenges')->with('success', 'Le challenge a été créé avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, redirection avec message d'erreur

            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création du challenge : ' . $e->getMessage());
        }
    }
    
    /**
     * Méthode pour gérer l'upload des fichiers
     **/
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
