<?php

namespace App\Http\Controllers\Plate;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintPlate extends Controller
{
    public function printPlatePdf(Application $application)
    {
        $appType = $application->app_type_id;

        if ($appType != 6){

            // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')

            $pdf = PDF::loadView('pdf.pdf-plate', compact('application'))->setPaper('a4', 'landscape');
            $filename = 'tablica_' . $application->app_number;
            return $pdf->stream($filename);

        }
    }
}
