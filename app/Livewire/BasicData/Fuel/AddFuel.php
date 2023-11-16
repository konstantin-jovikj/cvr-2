<?php

namespace App\Livewire\BasicData\Fuel;

use App\Models\Fuel;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AddFuel extends Component
{

    public $fuel_type = '';
    public $note = '';


    public function render()
    {
        return view('livewire.basic-data.fuel.add-fuel');
    }

    public function addFuel()
    {

        $validator = Validator::make(
            [
                'fuel_type' => $this->fuel_type,
                'note' => $this->note,
            ],
            [
                'fuel_type' => 'required|min:3',
            ],
            $this->customMessages()
        );
        $validator->validate();

        Fuel::create([
            'fuel_type' => $this->fuel_type,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новиот вид на гориво е успешно додаден!');
        return redirect(route('fuel.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'fuel_type.required' => 'Полето за Вид на Гориво е задолжително.',
            'fuel_type.min' => 'Видот на Гориво не може да има помалку од 3 карактери.',
        ];
    }
}
