<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardCityController extends Controller
{
    public function index()
    {
        return view('city.index');
    }
}
