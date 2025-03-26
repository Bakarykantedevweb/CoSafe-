<?php

namespace App\Http\Controllers\Campus;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportCampusController extends Controller
{
    public function index()
    {
        $reports = Report::where('campus_angel_id', Auth::guard('campus')->user()->id)->get();
        return view('campus.reports.index', compact('reports'));
    }

    public function create()
    {

        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];

        return view('campus.reports.create', [
            "villes_belgiques" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
        ]);
    }

    public function posterbesoin()
    {

        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];

        return view('campus.reports.createbesoin', [
            "villes_belgiques" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
        ]);
    }



    public function helps()
    {
        return view('campus.reports.help');
    }

    public function trouverchallenge()
    {
        $challenges = Report::where('campus_id', Auth::guard('campus')->user()->id)->get();
        return view('campus.reports.trouverchallenge', compact('challenges'));
    }
    public function postincident()
    {
        $challenges = Report::where('campus_id', Auth::guard('campus')->user()->id)->get();
        return view('campus.reports.postincident', compact('challenges'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255', // Correction ici
            'categorie' => 'required|string|max:255',
            'description' => 'required|string',
            'longitude' => 'required',
            'latitude' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
            // 'video' => 'nullable|mimes:mp4,mov,avi' // 20MB max
        ]);


        $report = new Report();
        $report->title = $request->input('title'); // Doit correspondre au champ HTML
        $report->categorie = $request->input('categorie');
        $report->description = $request->input('description');
        $report->longitude = $request->input('longitude');
        $report->latitude = $request->input('latitude');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_photo.' . $ext;
            $file->move(public_path('uploads/reports/photos'), $filename);
            $report->photo = $filename;
        }
        $report->campus_angel_id = Auth::guard('campus')->user()->id;
    

        $report->save();

        return redirect('/campus/reports')->with('success', 'Le rapport a été créé avec succès.');
    }
}
