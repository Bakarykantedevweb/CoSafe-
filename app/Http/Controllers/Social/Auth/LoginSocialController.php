<?php

namespace App\Http\Controllers\Social\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginSocialController extends Controller
{
    public function showFormLogin()
    {
        return view('social.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('social')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme COSAFE");
            return redirect('/social/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/social/login');
    }

    public function logout()
    {
        Auth::guard('social')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/social/login');
    }
}
