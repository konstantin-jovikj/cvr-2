<?php

namespace App\Livewire\Documents\Application;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;


class ImageController extends Component
{

    // protected $listeners = ['getImage'];

    // #[On('getImage')]
    // public function getImage($path)
    // {
    //     // dd($path);
    //     $imagePath = 'app/app_pictures/' . $path;

    //     $fileContents = Storage::disk('app_pictures')->get($imagePath);
    //     $extension = pathinfo($imagePath, PATHINFO_EXTENSION);

    //     $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($fileContents);

    //     // $this->emit('displayImage', $base64);
    // }


    public function render()
    {
        return view('livewire.documents.application.image-controller');
    }
}
