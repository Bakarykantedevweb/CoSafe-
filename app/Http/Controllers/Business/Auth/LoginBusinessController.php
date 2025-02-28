<?php

namespace App\Http\Controllers\Business\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginBusinessController extends Controller
{
    public function showFormLogin()
    {
        return view('business.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('business')->attempt($credentials)) {
            toastr()->success("Bienvenue sur la Plateforme COSAFE");
            return redirect('/business/dashboard');
        }
        toastr()->error("Email ou mot de passe incorrect");
        return redirect('/business/login');
    }

    public function logout()
    {
        Auth::guard('business')->logout();
        toastr()->success("Merci pour votre Visite");
        return redirect('/business/login');
    }
}
