<?php

namespace App\Livewire\BasicData\Shapes;

use App\Models\Shape;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditShape extends Component
{

    public $body_shape;
    public $additional_desc;
    public $note;
    public $shape;


    public function mount(Shape $shape){
        $this->body_shape = $shape->body_shape;
        $this->additional_desc = $shape->additional_desc;
        $this->note = $shape->note;
    }

    public function render()
    {
        return view('livewire.basic-data.shapes.edit-shape');
    }

    public function updateShape()
    {
        $validator = Validator::make(
            [
                'body_shape' => $this->body_shape,
                'additional_desc' => $this->additional_desc,
                'note' => $this->note,
            ],
            [
                'body_shape' => 'required|min:2',
            ],
            $this->customMessages()
        );
        $validator->validate();

        $this->shape->update([
            'body_shape' => $this->body_shape,
            'additional_desc' => $this->additional_desc,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новата Каросерија на возила е успешно додадена!');
        return redirect(route('shapes.all'));

        $this->reset();
    }

    public function customMessages()
    {
        return [
            'body_shape.required' => 'Полето за Облик на Каросерија е задолжително.',
            'category_name.min' => 'Името за Обликot на Каросерија не може да има помалку од 2 карактери.',
        ];
    }
}
