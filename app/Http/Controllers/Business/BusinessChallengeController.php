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
        return view('business.challenges.index',compact('challenges'));
    }

    public function create()
    {
        return view('business.challenges.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255', // Correction ici
            'categorie' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $report = new Challenge();
        $report->titre = $request->input('titre'); // Doit correspondre au champ HTML
        $report->categorie = $request->input('categorie');
        $report->description = $request->input('description');
        $report->start_date = $request->input('start_date');
        $report->end_date = $request->input('end_date');
        $report->business_id = Auth::guard('business')->user()->id;
        $report->save();
        toastr()->success('Challenge ajouté avec succès');
        return redirect('business/challenges');
    }
}
