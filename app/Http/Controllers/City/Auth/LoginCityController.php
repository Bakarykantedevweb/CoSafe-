<?php

namespace App\Http\Controllers\City\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginCityController extends Controller
{
    public function showFormLogin()
    {
        return view('city.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('city')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme COSAFE");
            return redirect('/city/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/city/login');
    }

    public function logout()
    {
        Auth::guard('city')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/city/login');
    }
}
