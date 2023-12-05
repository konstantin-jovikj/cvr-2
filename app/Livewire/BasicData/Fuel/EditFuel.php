<?php

namespace App\Livewire\BasicData\Fuel;

use App\Models\Fuel;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class EditFuel extends Component
{

    public $fuel_type;
    public $note;
    public $fuel;


    public function mount(Fuel $fuel)
    {
        $this->fuel_type = $fuel->fuel_type;
        $this->note = $fuel->note;
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.fuel.edit-fuel');
    }

    public function updateFuel()
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

        $this->fuel->update([
            'fuel_type' => $this->fuel_type,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новиот вид на гориво е успешно ажуриран!');
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
