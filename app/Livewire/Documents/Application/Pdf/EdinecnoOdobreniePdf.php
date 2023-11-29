<?php

namespace App\Livewire\Documents\Application\Pdf;

use App\Models\Application;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;


class EdinecnoOdobreniePdf extends Component
{
    public $application;

    public function mount(Application $application)
    {
        $this->application = $application;
    }


    public function render()

    {
        return view('livewire.documents.application.pdf.edinecno-odobrenie-pdf');
    }

    // public function generatePdf(Application $application)
    // {
    //     // $pdf = PDF::loadView('livewire.documents.application.pdf-template', compact('application'));
    //     $pdf = PDF::loadView('livewire.documents.application.pdf-template', compact('application'));
    //     return $pdf->stream('generated-pdf.pdf');
    // }
}
