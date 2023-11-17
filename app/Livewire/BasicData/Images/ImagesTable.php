<?php

namespace App\Livewire\BasicData\Images;

use App\Models\Image;
use Livewire\Component;

class ImagesTable extends Component
{
    public function render()
    {
        $images = Image::all();
        return view('livewire.basic-data.images.images-table',compact('images'));
    }
}
