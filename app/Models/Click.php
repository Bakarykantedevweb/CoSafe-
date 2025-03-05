<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ad;
class Click extends Model
{
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
