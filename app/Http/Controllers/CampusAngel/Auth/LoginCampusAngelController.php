<?php

namespace App\Http\Controllers\CampusAngel\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginCampusAngelController extends Controller
{
    public function showFormLogin()
    {
        return view('campus.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('campus')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme SWAPECO");
            return redirect('/campus/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/campus/login');
    }

    public function logout()
    {
        Auth::guard('campus')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/campus/login');
    }
}
