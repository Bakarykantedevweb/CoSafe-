<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Google2FAQRCode\Google2FA;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class FAController extends Controller
{

public function enable2FA()
{
    $user = auth()->user();
    $google2fa = new Google2FA();

    if (!$user->google2fa_secret) {
        $user->generate2FASecret();
    }

    $qrCode = QrCode::size(200)->generate(
        $google2fa->getQRCodeUrl(
            config('app.name'),
            $user->email,
            $user->google2fa_secret
        )
    );

    return view('auth.2fa', compact('qrCode', 'user'));
}

}
