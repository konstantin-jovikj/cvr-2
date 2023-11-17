<?php

namespace App\Livewire\BasicData\Pictures;

use App\Models\Image;
use App\Models\Picture;
use Livewire\Component;

class PicturesTable extends Component
{
    public function render()
    {
        $pictures = Picture::all();
        return view('livewire.basic-data.pictures.pictures-table',compact('pictures'));
    }

    public function deletePicture(Picture $picture)
    {

        if ($picture) {
            $picture->delete();
            session()->flash('success', 'Категоријата на Фотографија е успешно избришана');
            $this->redirect(route('pictures.all'));
        } else {
            session()->flash('error', 'Настана грешка.Категоријата на Фотографија не може да се избрише');
            $this->redirect(route('pictures.all'));
        }
    }
}
