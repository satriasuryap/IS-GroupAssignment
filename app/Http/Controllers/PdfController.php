<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PDF;

class PdfController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        $pdfPath = $request->file('pdf_file')->store('pdfs');

        //$pdfPath = $request->file('pdf_file')->store('pdfs');
        $pdf = PDF::create([
            'file' => $pdfPath,
        ]);

        return redirect()->route('upload')->with('pdf_id', $pdf->id);
    }

    public function download($pdfId)
    {
    $pdf = PDF::findOrFail($pdfId);

    return Storage::download($pdf->file);
    }

}
