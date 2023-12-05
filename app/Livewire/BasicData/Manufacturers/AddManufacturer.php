<?php

namespace App\Livewire\BasicData\Manufacturers;

use App\Models\Manufacturer;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;


class AddManufacturer extends Component

{



    public $name = '';
    public $address = '';
    public $note = '';


    public function render()
    {
        if (auth()->check() && auth()->user()->role_id == 1) {
        return view('livewire.basic-data.manufacturers.add-manufacturer')->layout('components.layouts.superadmin');
        }else{
            return view('livewire.basic-data.manufacturers.add-manufacturer');
        }
    }

    public function addManufacturer()
    {
        $this->validate([
            'name' => [
                'required',
                Rule::unique('manufacturers', 'name'),
            ],
            'address' => 'min:3|required',
            'note' => '',
        ], $this->customMessages());

        Manufacturer::create([
            'name' => $this->name,
            'address' => $this->address,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Производителот е успешно додаден');
        $this->redirect(route('manufacturers.all'));
    }

    public function customMessages()
    {
        return [
            'name.required' => 'Името на производителот е задолжително.',
            'name.unique' => 'Ова име веќе се наоѓа во нашата база на податоци.',
            'address.min' => 'Минимална должина на адресата е 3 карактери.',
            'address.required' => 'Адресата на производителот е задолжителна.',
        ];
    }
}
