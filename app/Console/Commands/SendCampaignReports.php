<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Campaign;
use Illuminate\Support\Facades\Mail;
use App\Mail\CampaignReport;
use Carbon\Carbon;

class SendCampaignReports extends Command
{
    protected $signature = 'campaigns:send-reports';
    protected $description = 'Envoie des rapports aux annonceurs sur la performance de leurs campagnes';

    public function handle()
    {
        $activeCampaigns = Campaign::where('is_active', true)->get();

        foreach ($activeCampaigns as $campaign) {
            Mail::to($campaign->user->email)->send(new CampaignReport($campaign));
        }

        $this->info('Rapports envoyés avec succès.');
    }
}

