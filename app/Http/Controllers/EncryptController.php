<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encrypt;
use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function formTemplate(){
        return view('upload');
    }

    public function upload(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc',
            'phonenum' => 'required|numeric',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
            'file' => 'required|file|mimes:pdf,doc,xls',
            'video' => 'required|file|mimetypes:video/*'
        ]);
    
        // Store data in the "encrypt" table
        $encrypt = new Encrypt;
        $encrypt->name=$request->name;
        $encrypt->email=$request->email;
        $encrypt->phonenum=$request->phonenum;
        $encrypt->image=$request->image;
        $encrypt->file=$request->file;
        $encrypt->video=$request->video;
        $encrypt->save();
    
        // Store the results in the session
        // $results = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'product' => $request->product,
        //     'image' => $request->image->getClientOriginalName(),
        //     'rating' => $request->rating,
        // ];
        // return redirect('/result')->with(['results' => $results, 'status' => 'Submitted!']);
    }
}