<?php

namespace App\Livewire\BasicData\ApplicationDocs;

use Livewire\Component;
use App\Models\ApplicationType;
use App\Models\Relateddocuments;

class ManageAppTypeDocs extends Component
{


    public $applicationTypes;
    public $relatedDocuments;
    public array $applicationTypeDocuments;

    public function mount()
    {
        $this->applicationTypes = ApplicationType::all();
        $this->relatedDocuments = Relateddocuments::all();
    }


    public function render()
    {
        return view('livewire.basic-data.application-docs.manage-app-type-docs');
    }


    public function toggleApplicationTypeDocs($applicationTypeId, $relatedDocumentId)
    {
        $applicationTypeDocuments = $this->applicationTypeDocuments;
        if (!isset($applicationTypeDocuments[$relatedDocumentId])) {
            $applicationTypeDocuments[$relatedDocumentId] = [];
        }

        $applicationType = ApplicationType::find($applicationTypeId);
        $existingDocs = $applicationType->relatedDocuments->pluck('id')->all();
        $applicationTypeDocuments[$applicationTypeId] = $existingDocs;

        if (in_array($relatedDocumentId, $existingDocs)) {
            // Remove the doc if it exists
            $existingDocs = array_diff($existingDocs, [$relatedDocumentId]);
        } else {
            // Add the doc if it doesn't exist
            $existingDocs[] = $relatedDocumentId;
        }

        // Sync the updated list of docs IDs with the application type
        $applicationType->relatedDocuments()->sync($existingDocs);
    }
}
