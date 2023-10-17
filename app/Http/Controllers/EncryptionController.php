<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encrypt(Request $request)
    {
        // name
        $name = $request->input('name');
        $encryptedname = Crypt::encrypt($name);
        return redirect('/encrypt')->with('encryptedname', $encryptedname);

        //email
        $email = $request->input('email');
        $encryptedemail = Crypt::encrypt($email);
        return redirect('/encrypt')->with('encryptedemail', $encryptedemail);
    }

    public function decrypt(Request $request)
    {
        //name
        $encryptedname = $request->input('encrypted_name');
        $decryptedname = Crypt::decrypt($encryptedname);
        return redirect('/encrypt')->with('decryptedname', $decryptedname);
        
        //email
        $encryptedemail = $request->input('encrypted_email');
        $decryptedemail = Crypt::decrypt($encryptedemail);
        return redirect('/encrypt')->with('decryptedemail', $decryptedemail);
    }
}