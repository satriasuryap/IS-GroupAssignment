<?php
// app/RC4Encrypter.php

namespace App;

class RC4Encrypter
{
    public static function encrypt($data, $key)
    {
        $encryptedData = self::rc4($data, $key);
        return base64_encode($encryptedData);
    }

    public static function decrypt($encryptedData, $key)
    {
        $encryptedData = base64_decode($encryptedData);
        return self::rc4($encryptedData, $key);
    }

    private static function rc4($data, $key)
    {
        $s = range(0, 255);
        $j = 0;
        $keyLength = strlen($key);

        for ($i = 0; $i < 256; $i++) {
            $j = ($j + $s[$i] + ord($key[$i % $keyLength])) % 256;
            list($s[$i], $s[$j]) = array($s[$j], $s[$i]);
        }

        $i = 0;
        $j = 0;
        $output = '';

        for ($k = 0; $k < strlen($data); $k++) {
            $i = ($i + 1) % 256;
            $j = ($j + $s[$i]) % 256;
            list($s[$i], $s[$j]) = array($s[$j], $s[$i]);
            $output .= $data[$k] ^ chr($s[($s[$i] + $s[$j]) % 256]);
        }

        return $output;
    }
}
