<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Campaign;
use Carbon\Carbon;

class UpdateCampaignStatus extends Command
{
    protected $signature = 'campaigns:update-status';
    protected $description = 'Active ou désactive automatiquement les campagnes selon les dates définies';

    public function handle()
    {
        $now = Carbon::now();

        // Activation des campagnes qui doivent démarrer
        Campaign::where('start_date', '<=', $now)
                ->where('end_date', '>', $now)
                ->where('is_active', false)
                ->update(['is_active' => true, 'status' => 'active']);

        // Désactivation des campagnes expirées
        Campaign::where('end_date', '<=', $now)
                ->where('is_active', true)
                ->update(['is_active' => false, 'status' => 'completed']);

        $this->info('Mise à jour des campagnes effectuée.');
    }
}

