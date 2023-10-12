<?php
  
namespace App\Http\Controllers;

use App\Models\Resume;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $resume = Resume::find($id);
        $filePath = $resume->resume; // Path to the PDF file in storage

        // Check if the file exists
        if (Storage::disk('public')->exists($filePath)) {
            $file = Storage::disk('public')->get($filePath);
            $response = new Response($file, 200);
    
            // Set the content type to PDF
            $response->header('Content-Type', 'application/pdf');
            $response->header('Content-Disposition', 'attachment;  filename="' . $filePath . '"');
    
            return $response;
        } else {
            // Handle the case where the PDF file does not exist
            abort(404);
        }
        return redirect()->back();
    }
    //for only pdf download
//     public function download($id)
// {       
//     $data= Resume::find($id);
//     $pdf = PDF::loadView('view', compact('data'))->setOptions(['defaultFont' => 'sans-serif']);
//     return $pdf->download('resume.pdf');

//     }
}