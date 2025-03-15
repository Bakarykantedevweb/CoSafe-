<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Support\Facades\Auth;

class BusinessChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::where('business_id', Auth::guard('business')->user()->id)->get();
        return view('business.challenges.index',compact('challenges'));
    }

    public function create()
    {
        return view('business.challenges.create');
    }

    public function store(Request $request)
    {
        
    }
}
