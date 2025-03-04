<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    // Redirige l'utilisateur vers la page de connexion de Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Gère le callback de Google après authentification
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Une erreur est survenue lors de la connexion avec Google.');
        }

        // Recherche de l'utilisateur par google_id ou par email
        $user = User::where('google_id', $googleUser->id)
                    ->orWhere('email', $googleUser->email)
                    ->first();

        if ($user) {
            // Si l'utilisateur existe, on met à jour google_id au cas où
            $user->update([
                'google_id' => $googleUser->id,
            ]);
        } else {
            // Création d'un nouvel utilisateur
            $user = User::create([
                'name'       => $googleUser->name,
                'email'      => $googleUser->email,
                'google_id'  => $googleUser->id,
                // Vous pouvez générer un mot de passe aléatoire ou définir une valeur par défaut
                'password'   => bcrypt(str_random(16)),
            ]);
        }

        Auth::login($user);

        return redirect()->intended('/home');
    }
}
