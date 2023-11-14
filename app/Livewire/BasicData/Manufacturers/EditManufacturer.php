<?php

namespace App\Livewire\BasicData\Manufacturers;

use App\Models\Manufacturer;
use Livewire\Component;
use Illuminate\Validation\Rule;

class EditManufacturer extends Component
{

    public $name;
    public $address;
    public $note;

    public $manufacturer;



    public function mount(Manufacturer $manufacturer)
    {
        $this->name = $manufacturer->name;
        $this->address = $manufacturer->address;
        $this->note = $manufacturer->note;

    }


    public function render()
    {
        return view('livewire.basic-data.manufacturers.edit-manufacturer');
    }

    public function updateManufacturer()
    {
        $this->validate([
            'name' => [
                'required',
                Rule::unique('manufacturers', 'name')->ignore($this->manufacturer->id),
            ],
            'address' => 'min:3|required',
            'note' => '',
        ], $this->customMessages());

        $this->manufacturer->update([
            'name' => $this->name,
            'address' => $this->address,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Производителот е успешно ажуриран');
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
