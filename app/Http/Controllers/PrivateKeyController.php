<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateKeyController extends Controller
{
    public function showPrivateKey()
{
    // Get the authenticated user
    $user = Auth::user();

    // Check if the user already has a private key stored
    if (!$user->private_key) {
        // Generate a new private key if not present
        $privateKey = $this->generatePrivateKey($user);

        // Store the trimmed private key in the database
        $user->update(['private_key' => $privateKey]);
    } else {
        // Retrieve the existing private key from the database
        $privateKey = trim($user->private_key);
        // Remove \r and \n from stored private key
        $privateKey = str_replace(["\r", "\n"], '', $privateKey);
    }

    // Pass the private key to the view
    return view('privatekey', ['privateKey' => $privateKey]);
}

    private function generatePrivateKey($user)
    {
        $config = [
            "private_key_bits" => 2048,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        ];

        // Generate a new private key
        $privateKey = openssl_pkey_new($config);

        // Get the private key as a PEM string
        openssl_pkey_export($privateKey, $privateKeyPEM);
        $trimmedPrivateKey = trim($privateKeyPEM);
        $trimmedPrivateKey = str_replace(["\r", "\n"], '', $trimmedPrivateKey);

        // Save the generated private key to the user in the database
        $user->update(['private_key' => $trimmedPrivateKey]);

        return $trimmedPrivateKey;
    }
}
