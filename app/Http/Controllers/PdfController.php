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

            if ($appType != 6){
                $pdf = PDF::loadView('pdf.pdf-template', compact('application', 'appDocuments'));
                return $pdf->stream($filename);
            }

    }


}
