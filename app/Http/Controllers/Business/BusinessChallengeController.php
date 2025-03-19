<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Support\Facades\Auth;

class BusinessChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.challenges.index', compact('challenges'));
    }

    public function helps()
    {
        $challenges = Challenge::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.challenges.help', compact('challenges'));
    }

    public function trouverchallenge()
    {
        $challenges = Challenge::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.challenges.trouverchallenge', compact('challenges'));
    }




    public function posterintrodchallenge()
    {
        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('business.challenges.posterintrodchallenge',[
            "villes_belgique" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
            ]);
    }
    public function create()
    {
        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('business.challenges.create',[
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
            $challenge->business_id = Auth::guard('business')->user()->id;

            // Sauvegarde du challenge
            $challenge->save();

            // Redirection avec message de succès
            return redirect('business/challenges')->with('success', 'Le challenge a été créé avec succès.');
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


    public function show(Challenge $challenge) {
        return view('challenges.show', compact('challenge'));
    }

    public function edit(Challenge $challenge) {
        return view('challenges.edit', compact('challenge'));
    }


    public function descriptionchallenge(Challenge $challenge) {
        $user = Auth::user()->id;

        return view('business.challenges.description', ['challenge' => $challenge, 'etudiant' => '']);
    }

    public function update(Request $request, Challenge $challenge) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $challenge->update($request->all());

        return redirect()->route('challenges.index')->with('success', 'Challenge mis à jour.');
    }

    public function destroy(Challenge $challenge) {
        $challenge->delete();
        return redirect()->route('challenges.index')->with('success', 'Challenge supprimé.');
    }
}
