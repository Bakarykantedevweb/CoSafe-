<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = ['nom' ,
                'email' ,
                'numero' ,
                'pays' ,
                'region',
                'ville' ,
                'codepostal',
                'adresse' ,
                'nomchallenge' ,
                'image' ,
                'type',
                'secteurs' ,
                'description',
                'fichier' ,
                'critere' ,
                'conditions' ,
                'dotation',
                'payschallenge',
                'villechallenge',
                'campus' ,
                'datelancement' ,
                'datecloture',
                'accepte_conditions' ];
}
