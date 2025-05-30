<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
//use PDF; 

class PdfController extends Controller
{
    public function generatePdf()
{
    return view('pdf.template');
}


/* con esto ya descarga
public function generatePdf()
{
    $pdf = Pdf::loadView('pdf.template');
    return $pdf->download('plantilla.pdf');
}*/



}