<?php

namespace App\Http\Controllers\Social\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterSocialController extends Controller
{
    public function showFormRegister()
    {
        return view('social.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:socials',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $city = new \App\Models\Social();
        $city->name = $request->input('name');
        $city->email = $request->input('email');
        $city->password = Hash::make($request->input('password'));
        $city->save();
        toastr()->success('Inscription réussie');
        return redirect('social/login');

    }
}
