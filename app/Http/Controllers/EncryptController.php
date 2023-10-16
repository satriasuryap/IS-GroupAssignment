<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encrypt;
use Illuminate\Http\Request;

class EncryptController extends Controller
{

    public function index(){
        return view('Encrypt', [

        ]);
    }
    public function show($id){
        return view('Encrypt', [
            "encrypt" => Encrypt::find($id)
        ]);
    }
}
