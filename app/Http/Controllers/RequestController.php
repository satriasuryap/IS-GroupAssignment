<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJobs;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requestData(Request $request){
        $data = $request->all(); // Get all data from the request

        // Assuming $data contains 'email', 'name', 'file', 'image', and 'video'
        EmailJobs::dispatch($data['email'], $data['name'], $data['file'], $data['image'], $data['video']);
    }
}
