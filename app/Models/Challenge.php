<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'typesactivite' => 'array',
        'reward_type' => 'array',
        'risques' => 'array',
        'competences_attendues' => 'array',
    ];
    
}
