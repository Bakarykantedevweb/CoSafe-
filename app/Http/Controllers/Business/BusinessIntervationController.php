<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessIntervationController extends Controller
{
    public function index()
    {
        return view('business.intervations.index');
    }

    public function statistiques()
    {
        return view('business.intervations.statistiques');
    }
}
