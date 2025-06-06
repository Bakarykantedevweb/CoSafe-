<?php

namespace App\Http\Controllers\City;

use App\Models\Report;
use App\Models\Besoin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CityCampusController extends Controller
{
    public function index()
    {
        $reports = Report::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.reports.index', compact('reports'));
    }

    public function create()
    {

        include 'villes.php';
        $pays = [

            "Belgique" => $villes_belgiques,
            "Luxembourg" => $villes_luxembourg,
            "France" => $villes_frances
        ];

        return view('city.reports.create', [
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

        return view('city.reports.createbesoin', [
            "villes_belgiques" => $villes_belgiques,
            "villes_luxembourg" => $villes_luxembourg,
            "villes_frances" => $villes_frances,
        ]);
    }



    public function helps()
    {
        return view('city.reports.help');
    }

    public function trouverchallenge()
    {
        $challenges = Report::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.reports.trouverchallenge', compact('challenges'));
    }
    public function postincident()
    {
        $challenges = Report::where('city_angel_id', Auth::guard('city')->user()->id)->get();
        return view('city.reports.postincident', compact('challenges'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'description' => 'required|string',
                'latitude' => 'required',
                'date_heure' => 'required',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
                'destinataires' => 'required|array',
                'partage_reseaux' => 'nullable|array',
                'categories' => 'required|array',
                // 'video' => 'nullable|mimes:mp4,mov,avi' // 20MB max
            ]);


            $report =  Report::create($request->except('photo', 'categorie'));

            $report->city_angel_id = Auth::guard('city')->user()->id;
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

            return redirect('/city/reports')->with('success', 'Le rapport a été créé avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, redirection avec message d'erreur
            var_dump($e->getMessage());

            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création du challenge : ' . $e->getMessage());
        }
    }

    public function  storebesoin(Request $request)
    {
        try {
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

            $besoin = Besoin::create($request->except('fichiers'));

            if ($request->hasFile('fichiers')) {
                foreach ($request->file('fichiers') as $file) {
                    $path = $file->store('public/besoins');
                    $besoin->fichiers()->create(['path' => $path]);
                }
            }

            return back()->with('success', 'Votre demande d’aide a été soumise avec succès !');
        } catch (\Exception $e) {
            // En cas d'erreur, redirection avec message d'erreur
            print($e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création du challenge : ' . $e->getMessage());
        }
    }

    public function appelaides()
    {
        return view('city.reports.appelaide');
    }
}
