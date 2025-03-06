<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }



public function verify2FA(Request $request)
{
    $request->validate(['one_time_password' => 'required']);
    $google2fa = new Google2FA();

    $user = auth()->user();
    $valid = $google2fa->verifyKey($user->google2fa_secret, $request->one_time_password);

    if ($valid) {
        session(['2fa_verified' => true]);
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors(['one_time_password' => 'Code incorrect.']);
}

}
