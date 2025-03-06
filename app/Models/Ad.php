<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Campaign;
use App\Models\Impression;
use App\Models\Click;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function impressions()
    {
        return $this->hasMany(Impression::class);
    }

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }
}
