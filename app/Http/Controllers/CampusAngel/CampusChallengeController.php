<?php

namespace App\Http\Controllers\CampusAngel;

use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CampusChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::where('campus_angel_id', Auth::guard('campus')->user()->id)->get();
        return view('campus.challenges.index', compact('challenges'));
    }


    public function helps()
    {
        $challenges = Challenge::where('campus_angel_id', Auth::guard('campus')->user()->id)->get();
       return view('campus.challenges.help', compact('challenges'));
    }

    public function supports()
    {
        $challenges = Challenge::where('campus_angel_id', Auth::guard('campus')->user()->id)->get();
       return view('campus.challenges.supports', compact('challenges'));
    }
    

    public function descriptionchallenge(Challenge $challenge) {
        $user = Auth::guard('campus')->user()->id;
        
        $challenge = Challenge::where('id', $challenge->id)->first();
        return view('campus.challenges.description', ['challenge' => $challenge]);
    }
    
    public function trouverchallenge()
    {
        $challenges = Challenge::where('campus_angel_id', Auth::guard('campus')->user()->id)->get();
        return view('campus.challenges.trouverchallenge', compact('challenges'));
    }




    public function posterintrodchallenge()
    {
        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('campus.challenges.posterintrodchallenge',[
            "villes_belgique" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
            ]);
    }

    public function create()
    {
        require  __DIR__.'/villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('campus.challenges.create',[
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
    
                // Localisation
                'pays' => 'required|string|max:100',
                'region' => 'required|string|max:100',
                'ville' => 'required|string|max:100',
                'codepostal' => 'required|string|max:20',
                'adresse' => 'required|string|max:255',
    
                // Informations complémentaires (si entreprise)
                'nomcommercial' => 'nullable|string|max:255',
                'numeroentreprise' => 'nullable|string|max:50',
                'numeroagreation' => 'nullable|string|max:50',
                'typesactivite' => 'nullable|json',
                'datedebutactivite' => 'nullable|date',
    
                // Informations sur le challenge
                'nomchallenge' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'type' => 'required|string',
                'secteurs' => 'required|string',
                'description' => 'nullable|string',
                'fichier' => 'required|file|mimes:doc,docx,pdf|max:5120',
                'critere' => 'nullable|string|max:255',
                'conditions' => 'required|file|mimes:doc,docx,pdf|max:5120',
                'dotation' => 'nullable|string',
    
                // Identification de la problématique à solutionner
                'risques' => 'nullable|json',
    
                // Compétences attendues
                'competences_attendues' => 'nullable|json',
    
                // Calendrier des sélections
                'datedebutinscription' => 'required|date',
                'datefininscription' => 'required|date|after:datedebutinscription',
                'datedebutselection' => 'required|date',
                'datefinselection' => 'required|date|after:datedebutselection',
    
                // Équipe
                'compositionequipes' => 'required|string',
                'nombreequipesmin' => 'required|integer|min:1',
                'nombreequipesmax' => 'required|integer|min:1|gt:nombreequipesmin',
                'criteresparticipation' => 'required|string',
    
                // Géolocalisation du challenge
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
            $challenge->campus_angel_id = Auth::guard('campus')->user()->id;
    
            // Sauvegarde du challenge
            $challenge->save();
    
            // Redirection avec message de succès
            return redirect('campus/challenges')->with('success', 'Le challenge a été créé avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, redirection avec message d'erreur
            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création du challenge : ' . $e->getMessage());
        }
    }
    
    /**
     * Méthode pour gérer l'upload des fichiers
     *
     * @param \Illuminate\Http\UploadedFile|null $file
     * @param string $destinationPath
     * @param string $prefix
     * @return string|null
     */
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
