<?php

namespace App\Http\Controllers\Business;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusinessCampusController extends Controller
{
    public function index()
    {
        $reports = Report::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.reports.index', compact('reports'));
    }

    public function create()
    {

        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];

        return view('business.reports.create',[
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

        return view('business.reports.createbesoin',[
            "villes_belgiques" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
            ]);
    }



    public function helps()
    {

        return view('business.reports.help');
    }

    public function trouverchallenge()
    {
        $challenges = Report::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.reports.trouverchallenge', compact('challenges'));
    }
    public function postincident()
    {
        $challenges = Report::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.reports.postincident', compact('challenges'));
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
        $report->business_id = Auth::guard('business')->user()->id;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_photo.' . $ext;
            $file->move(public_path('uploads/reports/photos'), $filename);
            $report->photo = $filename;
        }

        // if ($request->hasFile('video')) {
        //     $file = $request->file('video');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time() . '_video.' . $ext;
        //     $file->move(public_path('uploads/reports/videos'), $filename);
        //     $report->video = $filename;
        // }

        $report->save();

        return redirect('/business/reports')->with('success', 'Le rapport a été créé avec succès.');
    }

  public function  storebesoin(Request $request)
  {
    $request->validate([
        'nom_besoin' => 'required|string|max:255',
        'description' => 'required|string',
        'fichiers.*' => 'file|mimes:jpg,png,mp4|max:10240',
        'categories' => 'required|array',
        'geolocalisation' => 'nullable|string',
        'date_heure' => 'nullable|date',
        'budget' => 'required|string',
        'destinataires' => 'required|array',
        'partage_reseaux' => 'nullable|array',
        'partage_autorites' => 'required|boolean',
    ]);

    $besoin = Report::create($request->except('fichiers'));

    if ($request->hasFile('fichiers')) {
        foreach ($request->file('fichiers') as $file) {
            $path = $file->store('public/besoins');
            $besoin->fichiers()->create(['path' => $path]);
        }
    }

    return back()->with('success', 'Votre demande d’aide a été soumise avec succès !');
  }
}
