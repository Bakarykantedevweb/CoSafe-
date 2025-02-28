<?php

namespace App\Http\Controllers\Territory\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterTerritoryController extends Controller
{
    public function showFormRegister()
    {
        return view('territory.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:territories',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $territory = new \App\Models\Territory();
        $territory->name = $request->input('name');
        $territory->email = $request->input('email');
        $territory->password = Hash::make($request->input('password'));
        $territory->save();
        toastr()->success('Inscription réussie');
        return redirect('territory/login');

    }
}
