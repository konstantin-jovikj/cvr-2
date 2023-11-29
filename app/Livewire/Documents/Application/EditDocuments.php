<?php

namespace App\Livewire\Documents\Application;

use Livewire\Component;
use App\Models\Application;
use Livewire\WithFileUploads;
use App\Models\AssociatedDocument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditDocuments extends Component
{
    use WithFileUploads;

    public $application;
    public $documents;

    public $oldDocument;
    public $newDocument;

    public $newUploadedDocuments = [];

    public function mount(Application $application)
    {
        $this->application = $application;
        $this->documents = AssociatedDocument::where('application_id', $application->id)->get();
    }


    public function render()
    {
        return view('livewire.documents.application.edit-documents');
    }




    public function changeDocument($document)
    {
        $rules = [
            'newUploadedDocuments.*' => 'max:1024',
        ];

        $validator = Validator::make(
            [
                'newUploadedDocuments' => $this->newUploadedDocuments,
            ],
            $rules,
            $this->customMessages()
        );
        $validator->validate();

        // dd($this->newUploadedImages);
        $this->oldDocument = AssociatedDocument::where('id', $document)->first();
        $oldDocumentName = $this->oldDocument->document_desc;

        $oldDocPathInStorage = 'app_docs/' . $this->oldDocument->document_path;
        $oldDocPath = storage_path('app/' . $oldDocPathInStorage);

        // dd($oldDocPath);
        if (file_exists($oldDocPath)) {
            unlink($oldDocPath);
            $this->oldDocument->delete();


            $currentAppId = $this->oldDocument->application_id;

            $userDepartment = auth()->user()->department->id;
            $userLocalDept = auth()->user()->localDepartment->id;

            $appType = Application::find($currentAppId)->pluck('app_type_id');
            $appDate = Application::find($currentAppId)->pluck('app_date');


            $year = date('Y', strtotime($appDate));
            $month = date('m', strtotime($appDate));
            $day = date('d', strtotime($appDate));

            foreach ($this->newUploadedDocuments as $uploadedDocument) {

                $extension = $uploadedDocument->getClientOriginalExtension();
                $pos = strpos($oldDocumentName, '.');

                if ($pos !== false) {
                    $sanitizedDocName = substr($oldDocumentName, 0, $pos);
                } else {
                    $sanitizedDocName = $oldDocumentName;
                }

                $document_desc_with_extension = $sanitizedDocName . '.' . $extension;

                $path = $uploadedDocument->store("{$userDepartment}/{$userLocalDept}/{$year}/{$month}/{$day}/{$currentAppId}", 'app_docs');

                AssociatedDocument::create([
                    'application_id' => $currentAppId,
                    'document_path' => $path,
                    'document_desc' => $document_desc_with_extension,
                ]);
            }

            session()->flash('success', 'Документот е успешно ажуриран!');
            $this->reset();
            return redirect(route('applications.all'));
        } else {
            session()->flash('error', 'Документот не е пронајден!');
            $this->reset();
            return redirect(route('applications.all'));
        }
    }

    public function customMessages()
    {
        return [
            'newUploadedImages.*.max' => 'Прикачениот документ не може да биде поголема од 1MB.',
        ];
    }
}
