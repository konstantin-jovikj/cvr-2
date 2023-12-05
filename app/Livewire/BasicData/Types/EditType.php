<?php

namespace App\Livewire\BasicData\Types;

use App\Models\Brand;
use App\Models\Manufacturer;
use App\Models\Type;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditType extends Component
{

    public $manufacturers;
    public $brands;
    public $type;

    public $selectedManufacturer;
    public $selectedBrand;

    public $type_name = '';
    public $commercial_mark = '';
    public $variant = '';
    public $configuration = '';
    public $note = '';


    public function mount(Type $type)
    {
        $this->selectedManufacturer = $type->manufacturer_id;
        $this->selectedBrand = $type->brand_id;
        $this->type_name = $type->type_name;
        $this->commercial_mark = $type->commercial_mark;
        $this->variant = $type->variant;
        $this->configuration = $type->configuration;
        $this->note = $type->note;

        // dd($this->selectedManufacturer, $this->selectedBrand,  $this->type_name, $this->commercial_mark, $this->variant, $this->configuration, $this->note);
        $this->manufacturers = Manufacturer::all();
        $this->brands = Brand::where('manufacturer_id', $this->selectedManufacturer)->get();
    }


    public function render()
    {
        $types = Type::Paginate(15);
        if (auth()->check() && auth()->user()->role_id == 1) {
            return view('livewire.basic-data.types.edit-type', compact('types'))->layout('components.layouts.superadmin');
        }else{
            return view('livewire.basic-data.types.edit-type', compact('types'));
        }
    }




    public function updatedSelectedManufacturer($manufacturer)
    {
        $this->brands = Brand::where('manufacturer_id', $this->selectedManufacturer)->get();
        $this->selectedBrand = null;
    }

    public function updateType()
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



        $this->type->update([
            'manufacturer_id' => $this->selectedManufacturer,
            'brand_id' => $this->selectedBrand,
            'type_name' => $this->type_name,
            'commercial_mark' => $this->commercial_mark,
            'variant' => $this->variant,
            'configuration' => $this->configuration,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новиот тип на возило успешно ажуриран!');
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
