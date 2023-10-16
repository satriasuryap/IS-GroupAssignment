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

    public function addData(Request $request){
        $encrypt = new Encrypt;
        $encrypt->name=$request->name;
        $encrypt->email=$request->email;
        $encrypt->phonenum=$request->phonenum;
        $encrypt->image=$request->image;
        $encrypt->file=$request->file;
        $encrypt->video=$request->video;
        $encrypt->save();

    }
}
