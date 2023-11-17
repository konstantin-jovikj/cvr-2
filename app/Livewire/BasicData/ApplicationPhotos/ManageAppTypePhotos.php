<?php

namespace App\Livewire\BasicData\ApplicationPhotos;

use App\Models\ApplicationType;
use App\Models\Picture;
use Livewire\Component;

class ManageAppTypePhotos extends Component
{


    public $applicationTypes;
    public $pictures;
    public array $applicationTypePictures;

    public function mount()
    {
        $this->applicationTypes = ApplicationType::all();
        $this->pictures = Picture::all();
    }

    public function render()
    {
        return view('livewire.basic-data.application-photos.manage-app-type-photos');
    }

    public function toggleApplicationTypePhotos($applicationTypeId, $pictureId)
    {
        $applicationTypePictures = $this->applicationTypePictures;
        if (!isset($applicationTypePictures[$applicationTypeId])) {
            $applicationTypePictures[$applicationTypeId] = [];
        }

        $applicationType = ApplicationType::find($applicationTypeId);
        $existingPictures = $applicationType->pictures->pluck('id')->all();
        $applicationTypePictures[$applicationTypeId] = $existingPictures;

        if (in_array($pictureId, $existingPictures)) {
            // Remove the picture if it exists
            $existingPictures = array_diff($existingPictures, [$pictureId]);
        } else {
            // Add the picture if it doesn't exist
            $existingPictures[] = $pictureId;
        }

        // Sync the updated list of picture IDs with the application type
        $applicationType->pictures()->sync($existingPictures);
    }
}


