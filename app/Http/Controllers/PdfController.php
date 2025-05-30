<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

//use PDF; 

class PdfController extends Controller
{
    /* con esto ya descarga
    public function generatePdf()
{
    return view('pdf.template');
}*/



public function generatePdf085MG()
{
    $pdf = Pdf::loadView('pdf.template085MG');
    return $pdf->download('plantilla085MG.pdf');
}

public function generatePdf085G()
{
    $pdf = Pdf::loadView('pdf.template085G');
    return $pdf->download('plantilla085G.pdf');
}



}