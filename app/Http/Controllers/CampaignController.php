<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\Campaign;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period;
// CampaignController.php
class CampaignController extends Controller
{




public function analytics()
{
    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(30));
    return view('dashboard.analytics', compact('analyticsData'));
}

    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        $campaign = Campaign::create($request->all());
        return redirect()->route('campaigns.index');
    }

    public function show(Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }
}
