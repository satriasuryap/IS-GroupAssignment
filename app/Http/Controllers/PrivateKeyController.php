<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivateKeyController extends Controller
{
    public function show()
    {
        $privateKey = auth()->user()->private_key;

        return view('/privatekey');
    }
}
