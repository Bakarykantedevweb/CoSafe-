<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Campaign;

class CampaignReport extends Mailable
{
    use Queueable, SerializesModels;

    public $campaign;

    public function __construct(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    public function build()
    {
        return $this->subject('Rapport de votre campagne')
                    ->markdown('emails.campaign.report', [
                        'campaign' => $this->campaign
                    ]);
    }
}

