<?php

namespace App\Livewire\Documents\Application;

use Livewire\Component;
use App\Models\Application;
use App\Models\AssociatedImage;
use App\Models\AssociatedDocument;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Documents\Application\ImageController;
use Barryvdh\DomPDF\Facade\Pdf;

class ApplicationDetails extends Component
{
    public $application;
    public $images;
    public $documents;

    public function mount(Application $application)
    {
        $this->application = $application;
        $this->images = AssociatedImage::where('application_id', $application->id)->get();
        $this->documents = AssociatedDocument::where('application_id', $application->id)->get();
        // dd($this->images,$this->documents);
    }


    public function render()
    {
        return view('livewire.documents.application.application-details');
    }

    public function download($path, $document_desc)
    {
        $filePath = storage_path('app/app_docs/' . $path);

        if (Storage::disk('app_docs')->exists($path)) {
            $headers = [
                'Content-Disposition' => 'attachment; filename="' . $document_desc . '"',
            ];

            return response()->download($filePath, $document_desc, $headers);
        }

        abort(404);
    }

    public function generatePdf($application)
    {
        $pdf = PDF::loadView('livewire.documents.application.pdf.pdf-template', compact('application'));
        return $pdf->stream('generated-pdf.pdf');
    }
}
