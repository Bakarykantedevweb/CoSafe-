<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\Campaign;
use App\Models\Ad;
use App\Models\Impression;
use App\Models\Click;

// AdController.php
class AdController extends Controller
{
    public function store(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'required|url',
        ]);

        $ad = $campaign->ads()->create($request->all());
        return redirect()->route('campaigns.show', $campaign);
    }

    public function trackImpression($ad_id)
    {
        $ad = Ad::findOrFail($ad_id);
        Impression::create([
            'ad_id' => $ad->id,
            'viewed_at' => now(),
        ]);
    }

    public function trackClick($ad_id)
    {
        $ad = Ad::findOrFail($ad_id);
        Click::create([
            'ad_id' => $ad->id,
            'clicked_at' => now(),
        ]);
    }

    // Méthode pour afficher les statistiques d'une publicité
public function showStats($ad_id)
{
    $ad = Ad::withCount(['impressions', 'clicks'])->findOrFail($ad_id);
    $clicks = $ad->clicks_count;
    $impressions = $ad->impressions_count;
    $clickThroughRate = $impressions ? ($clicks / $impressions) * 100 : 0;

    return view('ads.stats', compact('ad', 'clicks', 'impressions', 'clickThroughRate'));
}

}
