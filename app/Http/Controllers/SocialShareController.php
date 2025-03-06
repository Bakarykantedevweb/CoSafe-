<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;

class SocialShareController extends Controller
{
    // Redirige l'utilisateur vers le provider (Facebook, Twitter, LinkedIn)
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Gère le callback après l'authentification
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        // Stocker le token pour le réutiliser
        session([$provider . '_token' => $user->token]);

        return redirect('/')->with('success', 'Authentification réussie avec ' . ucfirst($provider));
    }

    // Partage automatique d'un post sur les réseaux sociaux
    public function sharePost(Request $request, $provider)
    {
        $token = session($provider . '_token');

        if (!$token) {
            return redirect('/')->with('error', 'Veuillez d’abord vous authentifier sur ' . ucfirst($provider));
        }

        $message = $request->input('message', 'Ceci est un post automatique depuis Laravel !');

        switch ($provider) {
            case 'facebook':
                $response = Http::post("https://graph.facebook.com/me/feed", [
                    'message' => $message,
                    'access_token' => $token,
                ]);
                break;

            case 'twitter':
                $response = Http::withToken($token)->post("https://api.twitter.com/2/tweets", [
                    'text' => $message,
                ]);
                break;

            case 'linkedin':
                $response = Http::withToken($token)->post("https://api.linkedin.com/v2/ugcPosts", [
                    'author' => 'urn:li:person:YOUR_USER_ID',
                    'lifecycleState' => 'PUBLISHED',
                    'specificContent' => [
                        'com.linkedin.ugc.ShareContent' => [
                            'shareCommentary' => ['text' => $message],
                            'shareMediaCategory' => 'NONE',
                        ],
                    ],
                    'visibility' => ['com.linkedin.ugc.MemberNetworkVisibility' => 'PUBLIC'],
                ]);
                break;

            default:
                return response()->json(['error' => 'Réseau non supporté'], 400);
        }

        return response()->json($response->json());
    }
}
