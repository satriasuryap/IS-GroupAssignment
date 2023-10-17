<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptedController extends Controller
{
    public function encrypt(Request $request)
    {
        $message = $request->input('message');
        $encryptedMessage = Crypt::encrypt($message);
        return redirect('/')->with('encryptedMessage', $encryptedMessage);
    }

    public function decrypt(Request $request)
    {
        $encryptedMessage = $request->input('encrypted_message');
        $decryptedMessage = Crypt::decrypt($encryptedMessage);
        return redirect('/')->with('decryptedMessage', $decryptedMessage);
    }
}
