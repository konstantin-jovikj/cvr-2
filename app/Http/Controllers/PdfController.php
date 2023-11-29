<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(Application $application)
    {
        try {
            $pdf = PDF::loadView('pdf.pdf-template', compact('application'));
            return $pdf->stream();
        } catch (\Exception $e) {
            dd($e->getMessage()); // Handle or log the exception
        }
    }
}
