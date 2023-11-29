<?php

namespace App\Livewire\Documents\Application;

use Livewire\Component;
use App\Models\Application;
use App\Models\AssociatedImage;
use Livewire\WithFileUploads;

class EditImages extends Component
{
    use WithFileUploads;


    public $application;
    public $images = [];
    public $oldImage;
    public $newImage;
    public  $newUploadedImages=[];

    public function mount(Application $application)
    {
        $this->application = $application;
        $this->images = AssociatedImage::where('application_id', $application->id)->get();
    }
    public function render()
    {
        return view('livewire.documents.application.edit-images');
    }



    public function changeImage($image)
    {

        // dd($this->newUploadedImages);
        $this->oldImage = AssociatedImage::where('id', $image)->first();
        $oldImageName = $this->oldImage->image_name;


        $oldImagePathInStorage = 'public/' . $this->oldImage->image_path;
        $oldImagePath = storage_path('app/' . $oldImagePathInStorage);


        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
            $this->oldImage->delete();
        }

        $currentAppId = $this->oldImage->application_id;

        $userDepartment = auth()->user()->department->id;
        $userLocalDept = auth()->user()->localDepartment->id;

        $appType = Application::find($currentAppId)->pluck('app_type_id');
        $appDate = Application::find($currentAppId)->pluck('app_date');


        $year = date('Y', strtotime($appDate));
        $month = date('m', strtotime($appDate));
        $day = date('d', strtotime($appDate));

        foreach($this->newUploadedImages as $uploadedImage){

            $path = $uploadedImage->store("{$userDepartment}/{$userLocalDept}/{$year}/{$month}/{$day}/{$currentAppId}", 'public');
            AssociatedImage::create([
                'application_id' => $currentAppId,
                'image_path' => $path,
                'image_name' => $oldImageName,
            ]);
        }


    }

}
