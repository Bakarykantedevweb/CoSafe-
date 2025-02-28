<?php

namespace App\Http\Controllers\CampusAngel\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCampusAngelController extends Controller
{
    public function showFormRegister()
    {
        return view('campus.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:campus_angels',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $campusAngel = new \App\Models\CampusAngel();
        $campusAngel->name = $request->input('name');
        $campusAngel->email = $request->input('email');
        $campusAngel->password = Hash::make($request->input('password'));
        $campusAngel->save();
        toastr()->success('Inscription réussie');
        return redirect('campus/login');

    }
}
