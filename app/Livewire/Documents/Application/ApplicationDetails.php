<?php

namespace App\Livewire\Documents\Application;

use Livewire\Component;
use App\Models\Application;
use App\Livewire\Documents\Application\ImageController;
use App\Models\AssociatedImage;

class ApplicationDetails extends Component
{
    public $application;
    public $images;

    public function mount(Application $application)
    {
        $this->application = $application;
        $this->images = AssociatedImage::where('application_id', $application->id)->get();
        // $this->dispatch('getImage', $$this->images);
        // dd($images);
        // if (!is_null($images)) {

            // foreach ($images as $image) {
            //     $this->dispatch('getImage', $image->image_path);
            // }
        // }
    }


    public function render()
    {
        return view('livewire.documents.application.application-details');
    }

    // public $application;
    // public $images = [];

    // protected $listeners = ['getImage'];

    // public function mount(Application $application)
    // {
    //     $this->application = $application;
    //     $this->images = $this->application->associatedImages->pluck('image_path')->toArray();

    // }

    // public function render()
    // {
    //     $this->images = $this->application->associatedImages->pluck('image_path')->toArray();
    //     return view('livewire.documents.application.application-details');
    // }
}
