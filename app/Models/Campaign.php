<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ad;
class Campaign extends Model
{
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
