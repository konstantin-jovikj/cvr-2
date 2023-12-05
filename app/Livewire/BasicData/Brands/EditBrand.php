<?php

namespace App\Livewire\BasicData\Brands;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Manufacturer;
use Illuminate\Validation\Rule;

class EditBrand extends Component
{

    public $manufacturers;
    public $brand;

    public $selectedManufacturer = '';
    public $brand_name = '';
    public $note = '';

    public function mount(Brand $brand)
    {
        $this->manufacturers = Manufacturer::all();

        $this->selectedManufacturer = $brand->manufacturer_id;
        $this->brand_name = $brand->brand_name;
        $this->note = $brand->note;
    }

    public function render()
    {
        if (auth()->check() && auth()->user()->role_id == 1) {
            return view('livewire.basic-data.brands.edit-brand')->layout('components.layouts.superadmin');
        }else{
            return view('livewire.basic-data.brands.edit-brand');
        }
    }

    public function updateBrand()
    {
        $this->validate([
            'selectedManufacturer' => 'required|exists:manufacturers,id',
            'brand_name' => [
                'required',
                Rule::unique('brands', 'brand_name')->ignore($this->brand->id),
            ],
            'note' => '',
        ], $this->customMessages());

        $this->brand->update([
            'manufacturer_id' => $this->selectedManufacturer,
            'brand_name' => $this->brand_name,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новата Марка на возило е успешно ажурирана');
        $this->redirect(route('brands.all'));
    }

    public function customMessages()
    {
        return [
            'brand_name.required' => 'Името на марката на возило е задолжителнa.',
            'name.unique' => 'Оваа марка веќе се наоѓа во нашата база на податоци.',
            'selectedManufacturer.required' => 'Производителот на возило е задолжителен.',
            'selectedManufacturer.exists:manufacturers,id' => 'Одберете еден од постоечките производители.'
        ];
    }
}
