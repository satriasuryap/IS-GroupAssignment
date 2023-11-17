<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt; // AES
use Illuminate\Support\Facades\Storage;
use App\Models\AES;
use App\DesEncrypter;
use App\RC4Encrypter;

class EncryptionController extends Controller
{
        public function encryptName(Request $request)
    {
        $name = $request->input('name');
        $encryptedName = Crypt::encrypt($name);
        AES::create(['name' => $encryptedName]);
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
        AES::create(['email' => $encryptedEmail]);
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
        AES::create(['phone' => $encryptedPhone]);
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
        AES::create(['img' => $img]);
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
        AES::create(['file' => $file]);
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
        AES::create(['video' => $video]);
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

    public function encryptImgDES(Request $request)
    {
        $img = $request->file('img');
        $key = 'Halo1234'; // Replace with your actual key
        // $imgData = file_get_contents($img);
        // Encrypt the image data using DES encryption
        $encryptedImgDES = DesEncrypter::encrypt($img, $key);
        
        return redirect('/encryptDES')->with('encryptedimgDES', $encryptedImgDES);
    }

    public function decryptImgDES(Request $request)
    {
        $encryptedImgDES = $request->input('encrypted_imgDES');
        $key = 'Halo1234'; // Replace with your actual key

        // Decrypt the image data using DES decryption
        $decryptedImgData = DesEncrypter::decrypt($encryptedImgDES, $key);

        // Generate a unique file name for the decrypted image
        $fileName = 'decrypted_' . time() . '.png'; // You can adjust the file format as needed
    
        // Store the decrypted image as a file
        Storage::disk('public')->put($fileName, $decryptedImgData);
    
        return redirect('/encryptDES')->with('decryptedimgDES', $fileName);
    }

    public function encryptFileDES(Request $request)
    {
        $file = $request->input('file');
        $key = 'Halo1234'; // Replace with your actual key
        $encryptedFileDES = DesEncrypter::encrypt($file, $key);
        return redirect('/encryptDES')->with('encryptedfileDES', $encryptedFileDES);
    }

    public function decryptFileDES(Request $request)
    {
        $encryptedFileDES = $request->input('encrypted_fileDES');
        $key = 'Halo1234'; // Replace with your actual key

        $decryptedFileDES = DesEncrypter::decrypt($encryptedFileDES, $key);
        return redirect('/encryptDES')->with('decryptedfileDES', $decryptedFileDES);
    }

    public function encryptVideoDES(Request $request)
    {
        $file = $request->input('file');
        $key = 'Halo1234'; // Replace with your actual key
        $encryptedVideoDES = DesEncrypter::encrypt($file, $key);
        return redirect('/encryptDES')->with('encryptedvideoDES', $encryptedVideoDES);
    }

    public function decryptVideoDES(Request $request)
    {
        $encryptedVideoDES = $request->input('encrypted_videoDES');
        $key = 'Halo1234'; // Replace with your actual key

        $videoData = DesEncrypter::decrypt($encryptedVideoDES, $key);

        $fileName = 'decrypted_' . time() . '.mp4';

        Storage::disk('public')->put($fileName, $videoData);

        // $decryptedVideoDES = DesEncrypter::decrypt($encryptedVideoDES, $key);
        return redirect('/encryptDES')->with('decryptedvideoDES', $fileName);
    }

    public function encryptNameRC4(Request $request)
    {
        $name = $request->input('name');
        $key = 'inirc4ya'; // Replace with your actual key

        $encryptedNameRC4 = RC4Encrypter::encrypt($name, $key);
        
        return redirect('/encryptRC4')->with('encryptednameRC4', $encryptedNameRC4);
    }

    public function decryptNameRC4(Request $request)
    {
        $encryptedNameRC4 = $request->input('encrypted_nameRC4');
        $key = 'inirc4ya'; // Replace with your actual key

        $decryptedNameRC4 = RC4Encrypter::decrypt($encryptedNameRC4, $key);

        return redirect('/encryptRC4')->with('decryptednameRC4', $decryptedNameRC4);
    }

    public function encryptEmailRC4(Request $request)
    {
        $email = $request->input('email');
        $key = 'inirc4ya'; // Replace with your actual key

        $encryptedEmailRC4 = RC4Encrypter::encrypt($email, $key);
        
        return redirect('/encryptRC4')->with('encryptedemailRC4', $encryptedEmailRC4);
    }

    public function decryptEmailRC4(Request $request)
    {
        $encryptedEmailRC4 = $request->input('encrypted_emailRC4');
        $key = 'inirc4ya'; // Replace with your actual key

        $decryptedEmailRC4 = RC4Encrypter::decrypt($encryptedEmailRC4, $key);

        return redirect('/encryptRC4')->with('decryptednameRC4', $decryptedEmailRC4);
    }

    public function encryptPhoneRC4(Request $request)
    {
        $phone = $request->input('phone');
        $key = 'inirc4ya'; // Replace with your actual key

        $encryptedPhoneRC4 = RC4Encrypter::encrypt($phone, $key);
        
        return redirect('/encryptRC4')->with('encryptedphoneRC4', $encryptedPhoneRC4);
    }

    public function decryptPhoneRC4(Request $request)
    {
        $encryptedPhoneRC4 = $request->input('encrypted_phoneRC4');
        $key = 'inirc4ya'; // Replace with your actual key

        $decryptedPhoneRC4 = RC4Encrypter::decrypt($encryptedPhoneRC4, $key);

        return redirect('/encryptRC4')->with('decryptedphoneRC4', $decryptedPhoneRC4);
    }

    public function encryptImageRC4(Request $request)
    {
        $image = $request->input('image');
        $key = 'inirc4ya'; // Replace with your actual key

        $encryptedImageRC4 = RC4Encrypter::encrypt($image, $key);
        
        return redirect('/encryptRC4')->with('encryptedimageRC4', $encryptedImageRC4);
    }

    public function decryptImageRC4(Request $request)
    {
        $encryptedImageRC4 = $request->input('encrypted_imageRC4');
        $key = 'inirc4ya'; // Replace with your actual key

        $decryptedImageRC4 = RC4Encrypter::decrypt($encryptedImageRC4, $key);

        return redirect('/encryptRC4')->with('decryptedphoneRC4', $decryptedImageRC4);
    }

}