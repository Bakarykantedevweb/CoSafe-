<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->paginate(10);
        return view('annonces.index', compact('annonces'));
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'required',
            'categorie' => 'required',
            'localisation' => 'nullable|max:255',
            'contact' => 'nullable|max:255',
        ]);

        Annonce::create([
            'user_id' => Auth::id(),
            'titre' => $request->titre,
            'description' => $request->description,
            'categorie' => $request->categorie,
            'localisation' => $request->localisation,
            'contact' => $request->contact,
        ]);

        return redirect()->route('annonces.index')->with('success', 'Annonce publiée avec succès !');
    }

    public function show(Annonce $annonce)
    {
        return view('annonces.show', compact('annonce'));
    }

    public function destroy(Annonce $annonce)
    {
        if (Auth::id() === $annonce->user_id) {
            $annonce->delete();
            return redirect()->route('annonces.index')->with('success', 'Annonce supprimée.');
        }
        return back()->with('error', 'Action non autorisée.');
    }
}

