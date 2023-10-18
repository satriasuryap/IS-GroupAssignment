<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt; // AES
use Illuminate\Support\Facades\Storage;
use App\DesEncrypter;

class EncryptionController extends Controller
{
        public function encryptName(Request $request)
    {
        $name = $request->input('name');
        $encryptedName = Crypt::encrypt($name);
        return redirect('/encrypt')->with('encryptedname', $encryptedName);
    }

    public function decryptName(Request $request)
    {
        $encryptedName = $request->input('encrypted_name');
        $decryptedName = Crypt::decrypt($encryptedName);
        return redirect('/encrypt')->with('decryptedname', $decryptedName);
    }

    public function encryptEmail(Request $request)
    {
        $email = $request->input('email');
        $encryptedEmail = Crypt::encrypt($email);
        return redirect('/encrypt')->with('encryptedemail', $encryptedEmail);
    }

    public function decryptEmail(Request $request)
    {
        $encryptedEmail = $request->input('encrypted_email');
        $decryptedEmail = Crypt::decrypt($encryptedEmail);
        return redirect('/encrypt')->with('decryptedemail', $decryptedEmail);
    }

    public function encryptPhone(Request $request)
    {
        $phone = $request->input('phone');
        $encryptedPhone = Crypt::encrypt($phone);
        return redirect('/encrypt')->with('encryptedphone', $encryptedPhone);
    }

    public function decryptPhone(Request $request)
    {
        $encryptedPhone = $request->input('encrypted_phone');
        $decryptedPhone = Crypt::decrypt($encryptedPhone);
        return redirect('/encrypt')->with('decryptedphone', $decryptedPhone);
    }

    public function encryptImg(Request $request)
    {
        $img = $request->input('img');
        $encryptedImg = Crypt::encrypt($img);
        return redirect('/encrypt')->with('encryptedimg', $encryptedImg);
    }

    public function decryptImg(Request $request)
    {
        $encryptedImg = $request->input('encrypted_img');
        $decryptedImg = Crypt::decrypt($encryptedImg);
    
        // Convert the decrypted image string to binary data
        $imgData = base64_decode($decryptedImg);
    
        // Generate a unique file name for the decrypted image
        $fileName = 'decrypted_' . time() . '.png'; // You can adjust the file format as needed
    
        // Store the decrypted image as a file
        Storage::disk('public')->put($fileName, $imgData);
    
        return redirect('/encrypt')->with('decryptedimg', $fileName);
    }

    public function encryptFile(Request $request)
    {
        $file = $request->input('file');
        $encryptedFile = Crypt::encrypt($file);
        return redirect('/encrypt')->with('encryptedfile', $encryptedFile);
    }

    public function decryptFile(Request $request)
    {
        $encryptedFile = $request->input('encrypted_file');
        $decryptedFile = Crypt::decrypt($encryptedFile);
        return redirect('/encrypt')->with('decryptedfile', $decryptedFile);
    }

    public function encryptVideo(Request $request)
    {
        $video = $request->input('video');
        $encryptedVideo = Crypt::encrypt($video);
        return redirect('/encrypt')->with('encryptedvideo', $encryptedVideo);
    }

    public function decryptVideo(Request $request)
    {
        $encryptedVideo = $request->input('encrypted_video');
        $decryptedVideo = Crypt::decrypt($encryptedVideo);
    
        // Convert the decrypted video string to binary data
        $videoData = base64_decode($decryptedVideo);
    
        // Generate a unique file name for the decrypted video
        $fileName = 'decrypted_' . time() . '.mp4'; // Adjust the file format as needed
    
        // Store the decrypted video as a file
        Storage::disk('public')->put($fileName, $videoData);
    
        return redirect('/encrypt')->with('decryptedvideo', $fileName);
    }

    public function encryptNameDES(Request $request)
    {
        $name = $request->input('name');
        $key = 'Halo1234'; // Replace with your actual key

        $encryptedNameDES = DesEncrypter::encrypt($name, $key);
        
        return redirect('/encryptDES')->with('encryptednameDES', $encryptedNameDES);
    }

    public function decryptNameDES(Request $request)
    {
        $encryptedNameDES = $request->input('encrypted_nameDES');
        $key = 'Halo1234'; // Replace with your actual key

        $decryptedNameDES = DesEncrypter::decrypt($encryptedNameDES, $key);

        return redirect('/encryptDES')->with('decryptednameDES', $decryptedNameDES);
    }
    public function encryptEmailDES(Request $request)
    {
        $email = $request->input('email');
        $key = 'Halo1234'; // Replace with your actual key

        $encryptedEmailDES = DesEncrypter::encrypt($email, $key);
        
        return redirect('/encryptDES')->with('encryptedemailDES', $encryptedEmailDES);
    }

    public function decryptEmailDES(Request $request)
    {
        $encryptedEmailDES = $request->input('encrypted_emailDES');
        $key = 'Halo1234'; // Replace with your actual key

        $decryptedEmailDES = DesEncrypter::decrypt($encryptedEmailDES, $key);

        return redirect('/encryptDES')->with('decryptedemailDES', $decryptedEmailDES);
    }
    public function encryptPhoneDES(Request $request)
    {
        $phone = $request->input('phone');
        $key = 'Halo1234'; // Replace with your actual key

        $encryptedPhoneDES = DesEncrypter::encrypt($phone, $key);
        
        return redirect('/encryptDES')->with('encryptedphoneDES', $encryptedPhoneDES);
    }

    public function decryptPhoneDES(Request $request)
    {
        $encryptedPhoneDES = $request->input('encrypted_phoneDES');
        $key = 'Halo1234'; // Replace with your actual key

        $decryptedPhoneDES = DesEncrypter::decrypt($encryptedPhoneDES, $key);

        return redirect('/encryptDES')->with('decryptedphoneDES', $decryptedPhoneDES);
    }

}