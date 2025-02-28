<?php

namespace App\Http\Controllers\CampusAngel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardCampusAngelController extends Controller
{
    public function index(){
        return view('campus.index');
    }
}
