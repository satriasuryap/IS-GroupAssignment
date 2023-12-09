<?php

namespace App\Http\Controllers;

use App\Models\AES;
use App\Models\DES;
use App\Models\RC4;
use App\Jobs\EmailJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function inputPrivateKey()
    {
        return view('inputPrivateKey');
    }
    
    public function verifyPrivateKey(Request $request)
    {
        $enteredPrivateKey = trim($request->input('private_key'));
        $enteredPrivateKey = str_replace(["\r", "\n"], '', $enteredPrivateKey);
        // dd('Entered Private Key:', $enteredPrivateKey);

        $user = Auth::user();
        $storedPrivateKey = trim($user->private_key);
        $storedPrivateKey = str_replace(["\r", "\n"], '', $storedPrivateKey);
        // dd('Stored Private Key:', $storedPrivateKey);

        // Check if the entered private key matches the stored private key
        if ($enteredPrivateKey === $storedPrivateKey) {
            return redirect()->route('view');
        } else {
            return redirect()->route('inputPrivateKey')->with('error', 'Invalid private key entered.');
        }
    }

    public function index()
    {
        // Retrieve items from AES encryption
        $aesItems = AES::all();

        // Retrieve items from DES encryption
        $desItems = DES::all();

        // Retrieve items from RC4 encryption
        $rc4Items = RC4::all();

        // Assuming you have a method to fetch email, AES, DES, and RC4 data from the database
        $emailData = $this->getEmailData(); // Replace with the actual method
        $aesData = $this->getAESData(); // Replace with the actual method
        $desData = $this->getDESData(); // Replace with the actual method
        $rc4Data = $this->getRC4Data(); // Replace with the actual method

        // Dispatch EmailJobs with the fetched data
        EmailJobs::dispatch($emailData, $aesData, $desData, $rc4Data);

        return view('view', [
            'aesItems' => $aesItems,
            'desItems' => $desItems,
            'rc4Items' => $rc4Items,
        ]);
    }

    // Replace these methods with your actual methods to fetch data from the database
    private function getEmailData()
    {
        // Logic to fetch email data
        return 'example@email.com';
    }

    private function getAESData()
    {
        // Logic to fetch AES data
        return 'aes_data_here';
    }

    private function getDESData()
    {
        // Logic to fetch DES data
        return 'des_data_here';
    }

    private function getRC4Data()
    {
        // Logic to fetch RC4 data
        return 'rc4_data_here';
    }

}
