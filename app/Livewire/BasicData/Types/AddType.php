<?php

namespace App\Livewire\BasicData\Types;

use App\Models\Brand;
use App\Models\Manufacturer;
use App\Models\Type;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AddType extends Component
{

    public $manufacturers;
    public $brands;

    public $selectedManufacturer = null;
    public $selectedBrand = null;

    public $type_name = '';
    public $commercial_mark = '';
    public $variant = '';
    public $configuration = '';
    public $note = '';

    public function mount()
    {
        $this->manufacturers = Manufacturer::all();
        $this->selectedBrand = [];
    }

    public function updatedSelectedManufacturer($manufacturer)
    {
        $this->brands = Brand::where('manufacturer_id', $manufacturer)->get();
        $this->selectedBrand = null;
    }



    public function render()
    {
        return view('livewire.basic-data.types.add-type');
    }


    public function addType()
    {

        $validator = Validator::make(
            [
                'manufacturer_id' => $this->selectedManufacturer,
                'brand_id' => $this->selectedBrand,
                'type_name' => $this->type_name,
                'commercial_mark' => $this->commercial_mark,
                'variant' => $this->variant,
                'configuration' => $this->configuration,
                'note' => $this->note,
            ],
            [
                'manufacturer_id' => 'required',
                'brand_id' => 'required',
                'type_name' => 'required',
                // ... other rules
            ],
            $this->customMessages()
        );
        $validator->validate();



        Type::create([
            'manufacturer_id' => $this->selectedManufacturer,
            'brand_id' => $this->selectedBrand,
            'type_name' => $this->type_name,
            'commercial_mark' => $this->commercial_mark,
            'variant' => $this->variant,
            'configuration' => $this->configuration,
            'note' => $this->note,
        ]);

        session()->flash('success', 'новиот тип на возило успешно додадено!');
        return redirect(route('types.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'manufacturer_id.required' => 'Полето за Производител е задолжително.',
            'manufacturer_id.exists:manufacturers,id' => 'Одберете Производител од Понудената листа.',
            'brand_id.required' => 'Полето за Модел е задолжително.',
            'brand_id.exists:brands,id' => 'Одберете Модел од Понудената листа.',
            'type_name.required' => 'Ова Поле е задолжително.',
        ];
    }
}
