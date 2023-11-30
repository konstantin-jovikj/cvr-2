<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationType;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{


    public function generatePdf(Application $application)
    {

        $applicationTypes = ApplicationType::all();
        try {
            // Pdf::setOption(['defaultFont' => 'DejaVu Sans']);
            $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'applicationTypes'));
            return $pdf->stream();
        } catch (\Exception $e) {
            dd($e->getMessage()); // Handle or log the exception
        }
    }
}
