<?php

namespace App\Livewire\BasicData\Pictures;

use App\Models\Picture;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class EditPicture extends Component
{

    public $picture_name;
    public $picture;

    public function mount(Picture $picture)
    {
        $this->picture_name = $picture->picture_name;
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.pictures.edit-picture');
    }

    public function updatePicture()
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

        $this->picture->update([
            'picture_name' => $this->picture_name,
        ]);

        session()->flash('success', 'Новата категорија на Фотографија е успешно ажурирана!');
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
