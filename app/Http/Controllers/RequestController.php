<?php

namespace App\Http\Controllers;
use App\Models\AES;
use App\Models\DES;
use App\Models\RC4;
use App\Jobs\EmailJobs;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requestData(Request $request){
        $data = $request->all(); // Get all data from the request

        // Assuming $data contains 'email', 'name', 'file', 'image', and 'video'
        EmailJobs::dispatch($data['email'], $data['name'], $data['file'], $data['image'], $data['video']);
    }

    public function index()
    {
        // Retrieve items from AES encryption
        $aesItems = AES::all();

        // Retrieve items from DES encryption
        $desItems = DES::all();

        // Retrieve items from RC4 encryption
        $rc4Items = RC4::all();

        return view('view', [
            'aesItems' => $aesItems,
            'desItems' => $desItems,
            'rc4Items' => $rc4Items,
        ]);
    }
}
