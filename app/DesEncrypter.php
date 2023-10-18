<?php

// app/DesEncrypter.php

namespace App;

use phpseclib3\Crypt\DES;

class DesEncrypter
{
    public static function encrypt($data, $key)
    {
        $des = new DES('ctr');
        $des->setKey($key);

        // Generate a random IV
        $iv = random_bytes(8); // 64 bits for CTR mode

        // Set the IV
        $des->setIV($iv);

        return base64_encode($iv . $des->encrypt($data));
    }

    public static function decrypt($encryptedData, $key)
    {
        $des = new DES('ctr');
        $des->setKey($key);

        // Extract the IV from the encrypted data
        $iv = substr(base64_decode($encryptedData), 0, 8);

        // Set the IV
        $des->setIV($iv);

        // Decrypt the data (excluding the IV)
        $dataToDecrypt = substr(base64_decode($encryptedData), 8);

        return $des->decrypt($dataToDecrypt);
    }
}
