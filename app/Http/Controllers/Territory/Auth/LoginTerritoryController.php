<?php

namespace App\Http\Controllers\Territory\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginTerritoryController extends Controller
{
    public function showFormLogin()
    {
        return view('territory.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('territory')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme COSAFE");
            return redirect('/territory/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/territory/login');
    }

    public function logout()
    {
        Auth::guard('territory')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/territory/login');
    }
}
