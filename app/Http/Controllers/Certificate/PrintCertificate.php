<?php

namespace App\Http\Controllers\Certificate;

use App\Models\Application;
use App\Models\ApplicationType;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PrintCertificate extends Controller
{
    public function certificatePrintPdf(Application $application)
    {
        $appType = $application->app_type_id;
        $appId = $application->id;

        $pdf = PDF::loadView('pdf.pdf-certificate', compact('application'));
        $fileName = 'potvrda_' . $application->app_number;
        return $pdf->stream($fileName);
    }
}

// public function certificatePrintPdf(Application $application)
// {
//     $appType = $application->app_type_id;
//     $appId = $application->id;

//     //sanitize app_number

//     $appNumber = str_replace('/', '_', $application->app_number);


//     $pdf = PDF::loadView('pdf.pdf-certificate', compact('application'));
//     $fileName = 'potvrda_' . $appNumber;

//     $pdfContent = $pdf->output();

//     Storage::put('public/' . $fileName . '.pdf', $pdfContent);
//     // return $pdf->stream($fileName);

// }
