<?php

namespace App\Livewire\Documents\Application;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
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

    // #[Validate('image|max:4096')]
    public  $newUploadedImages=[];

    // protected $rules = [
    //     'newUploadedImages' => 'image|max:4096',
    // ];

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
        $rules = [
            'newUploadedImages.*' => 'image|max:4096',
        ];

        $validator = Validator::make(
            [
                'newUploadedImages' => $this->newUploadedImages,
            ],
            $rules,
            $this->customMessages()
        );
        $validator->validate();

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

        session()->flash('success', 'Фотографијата е успешно ажурирана!');
        $this->reset();
        return redirect(route('applications.all'));
    }

    public function customMessages()
    {
        return [
            'newUploadedImages.*.image' => 'Прикачената датотека мора да биде фотографија.',
            'newUploadedImages.*.max' => 'Прикачената слика не може да биде поголема од 4MB.',
        ];
    }

}
