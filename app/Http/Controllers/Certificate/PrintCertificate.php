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
