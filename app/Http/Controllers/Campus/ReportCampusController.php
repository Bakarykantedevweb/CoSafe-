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
        return view('campus.reports.create');
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

        $report->campus_angel_id = Auth::guard('campus')->user()->id;
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

        return redirect('/campus/reports')->with('success', 'Le rapport a été créé avec succès.');
    }
}
