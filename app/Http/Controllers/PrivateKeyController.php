<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateKeyController extends Controller
{
    public function showPrivateKey()
    {
        // Generate or fetch the private key
        $privateKey = $this->generatePrivateKey();

        // Pass the private key to the view
        return view('privatekey', ['privateKey' => $privateKey]);
    }

    private function generatePrivateKey()
    {
        $config = [
            "private_key_bits" => 2048,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        ];

        // Generate a new private key
        $privateKey = openssl_pkey_new($config);

        // Get the private key as a PEM string
        openssl_pkey_export($privateKey, $privateKeyPEM);

        return $privateKeyPEM;
    }
}
