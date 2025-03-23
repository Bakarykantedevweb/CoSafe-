<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    protected $fillable = [
        'nom_besoin', 'description', 'fichiers', 'categories', 'destinataires', 'partage_reseaux','budget','partage_autorites','date_heure'
    ];

    protected $casts = [
        'fichiers' => 'array',
        'categories' => 'array',
        'destinataires' => 'array',
        'partage_reseaux' => 'array',
    ];
}
