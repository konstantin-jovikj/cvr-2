<?php

namespace App\Livewire\BasicData\Pictures;

use App\Models\Image;
use App\Models\Picture;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class AddPicture extends Component
{

    public $picture_name = '';

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.pictures.add-picture');
    }

    public function addImage()
    {

        $validator = Validator::make(
            [
                'picture_name' => $this->picture_name,
            ],
            [
                'picture_name' => 'required|min:3',
            ],
            $this->customMessages()
        );
        $validator->validate();

        Picture::create([
            'picture_name' => $this->picture_name,
        ]);

        session()->flash('success', 'Новата категорија на Фотографија е успешно додадена!');
        return redirect(route('pictures.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'picture_name.required' => 'Полето за Име на Фотографија е задолжително.',
            'picture_name.min' => 'Името на фотографијата не може да има помалку од 3 карактери.',
        ];
    }
}
