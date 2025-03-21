<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'categories' => 'array',
        'destinataires' => 'array',
        'partage_reseaux' => 'array',
    ];
}
