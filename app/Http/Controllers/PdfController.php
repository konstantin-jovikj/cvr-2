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
        // try {

            $appType = $application->app_type_id;
            $appDocuments = ApplicationType::find($appType)->relatedDocuments;

            $filename = 'baranje_' . $application->app_number;

            if ($appType == 1){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 2){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 3){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 4){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 5){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 6){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 7){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
            if ($appType == 8){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }
    }
}
