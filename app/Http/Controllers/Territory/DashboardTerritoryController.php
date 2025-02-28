<?php

namespace App\Http\Controllers\Territory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTerritoryController extends Controller
{
    public function index()
    {
        return view('territory.index');
    }
}
