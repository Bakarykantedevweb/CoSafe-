<?php

namespace App\Http\Controllers\City;

use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CityChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.challenges.index', compact('challenges'));
    }

    public function helps()
    {
        $challenges = Challenge::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.challenges.help', compact('challenges'));
    }

    public function trouverchallenge()
    {
        $challenges = Challenge::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.challenges.trouverchallenge', compact('challenges'));
    }

    public function posterintrodchallenge()
    {
        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];
        return view('city.challenges.posterintrodchallenge', [
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
        return view('city.challenges.create', [
            "villes_belgique" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
        ]);
    }



    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'numero' => 'required|string|max:20',
            'pays' => 'required|string',
            'region' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'codepostal' => 'required|string|max:10',
            'adresse' => 'required|string|max:255',
            'nomcommercial' => 'nullable|string|max:255',
            'numeroentreprise' => 'nullable|string|max:255',
            'numeroagreation' => 'nullable|string|max:255',
            'typesactivite' => 'nullable|array',
            'datedebutinscription' => 'required|date',
            'datefininscription' => 'required|date',
            'description' => 'nullable|string|max:1000',
            'nomchallenge' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'secteur' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fichier' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'reward_value' => 'required|string|max:255',
            'reward_type' => 'nullable|array',
            'reward_description' => 'nullable|string|max:1000',
            'association_name' => 'nullable|string|max:255',
            'association_cause' => 'nullable|string|max:255',
            'association_phone' => 'nullable|string|max:20',
            'association_email' => 'nullable|email',
            'association_website' => 'nullable|url',
            'association_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx|max:2048',
            'association_country' => 'nullable|string',
            'association_city' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Enregistrer les données dans la base de données
        $challenge = new Challenge();
        $challenge->nom = $request->nom;
        $challenge->email = $request->email;
        $challenge->numero = $request->numero;
        $challenge->pays = $request->pays;
        $challenge->region = $request->region;
        $challenge->ville = $request->ville;
        $challenge->codepostal = $request->codepostal;
        $challenge->adresse = $request->adresse;
        $challenge->nomcommercial = $request->nomcommercial;
        $challenge->numeroentreprise = $request->numeroentreprise;
        $challenge->numeroagreation = $request->numeroagreation;
        $challenge->typesactivite = json_encode($request->typesactivite);  // Enregistrer les activités sélectionnées sous forme de tableau JSON
        $challenge->datedebutinscription = $request->datedebutinscription;
        $challenge->datefininscription = $request->datefininscription;
        $challenge->description = $request->description;
        $challenge->nomchallenge = $request->nomchallenge;
        $challenge->type = $request->type;
        $challenge->secteurs = $request->secteur;
        $challenge->reward_value = $request->reward_value;
        $challenge->reward_type = json_encode($request->reward_type);  // Enregistrer les types de récompense sous forme de tableau JSON
        $challenge->reward_description = $request->reward_description;
        $challenge->association_name = $request->association_name;
        $challenge->association_cause = $request->association_cause;
        $challenge->association_phone = $request->association_phone;
        $challenge->association_email = $request->association_email;
        $challenge->association_website = $request->association_website;
        $challenge->association_country = $request->association_country;
        $challenge->association_city = $request->association_city;
        $challenge->start_date = $request->start_date;
        $challenge->end_date = $request->end_date;
        $challenge->city_angel_id = Auth::guard('city')->user()->id;

         // Gestion de l'image du challenge
         if ($request->hasFile('image')) {
            // Générer un nom unique pour l'image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Déplacer l'image dans le dossier public/uploads/challenges/images
            $request->file('image')->move(public_path('uploads/challenges/images'), $imageName);
            // Enregistrer le chemin relatif de l'image dans la base de données
            $challenge->image = 'uploads/challenges/images/' . $imageName;
        }

        // Gestion du fichier d'association (logo, présentation)
        if ($request->hasFile('association_file')) {
            // Générer un nom unique pour le fichier
            $associationFileName = time() . '_' . $request->file('association_file')->getClientOriginalName();
            // Déplacer le fichier dans le dossier public/uploads/challenges/association_files
            $request->file('association_file')->move(public_path('uploads/challenges/association_files'), $associationFileName);
            // Enregistrer le chemin relatif du fichier dans la base de données
            $challenge->association_file = 'uploads/challenges/association_files/' . $associationFileName;
        }

         // Gestion du fichier d'association (logo, présentation)
         if ($request->hasFile('fichier')) {
            // Générer un nom unique pour le fichier
            $fichierName = time() . '_' . $request->file('fichier')->getClientOriginalName();
            // Déplacer le fichier dans le dossier public/uploads/challenges/fichier
            $request->file('fichier')->move(public_path('uploads/challenges/fichiers'), $fichierName);
            // Enregistrer le chemin relatif du fichier dans la base de données
            $challenge->fichier = 'uploads/challenges/fichiers/' . $fichierName;
        }

        // Sauvegarder le challenge
        $challenge->save();

        // Retourner une réponse ou redirection
        toastr()->success('Challenge enregistré avec succès.');
        return redirect("city/challenges");
    }



    public function descriptionchallenge(Challenge $challenge)
    {
        $user = Auth::guard('city')->user()->id;

        $challenge = Challenge::where('id', $challenge->id)->first();
        return view('city.challenges.description', ['challenge' => $challenge]);
    }



    public function show(Challenge $challenge)
    {
        return view('challenges.show', compact('challenge'));
    }

    public function edit(Challenge $challenge)
    {
        return view('challenges.edit', compact('challenge'));
    }




    public function update(Request $request, Challenge $challenge)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $challenge->update($request->all());

        return redirect()->route('challenges.index')->with('success', 'Challenge mis à jour.');
    }

    public function destroy(Challenge $challenge)
    {
        $challenge->delete();
        return redirect()->route('challenges.index')->with('success', 'Challenge supprimé.');
    }
}
