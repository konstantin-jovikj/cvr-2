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

            if ($appType == 1){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 2){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 3){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 4){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 5){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 6){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 7){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
            if ($appType == 8){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream();
            }
    }
}
