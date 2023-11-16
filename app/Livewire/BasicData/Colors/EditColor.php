<?php

namespace App\Livewire\BasicData\Colors;

use App\Models\Color;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditColor extends Component
{

    public $color_name = '';
    public $color_code = '';
    public $note = '';

    public $color;

    public function mount(Color $color)
    {
        $this->color_name = $color->color_name;
        $this->color_code = $color->color_code;
        $this->note = $color->note;
    }



    public function render()
    {
        return view('livewire.basic-data.colors.edit-color');
    }

    public function updateColor()
    {

        $validator = Validator::make(
            [
                'color_name' => $this->color_name,
                'color_code' => $this->color_code,
                'note' => $this->note,
            ],
            [
                'color_name' => 'required|min:3',
                'color_code' => 'required|max:3',
            ],
            $this->customMessages()
        );
        $validator->validate();

        $this->color->update([
            'color_name' => $this->color_name,
            'color_code' => $this->color_code,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Бојата е успешно ажурирана!');
        return redirect(route('colors.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'color_name.required' => 'Описот на Бојата е задолжителен.',
            'color_name.min' => 'Описот на Бојата не може да има помалку од 3 карактери.',
            'color_code.required' => 'Шифрата на Бојата е задолжителна.',
            'color_code.max' => 'Шифрата на Бојата не може да има повеќе од 3 карактери.',
        ];
    }
}
