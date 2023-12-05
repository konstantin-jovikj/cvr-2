<?php

namespace App\Livewire\BasicData\Brands;

use App\Models\Brand;
use App\Models\Manufacturer;
use Livewire\Component;
use Illuminate\Validation\Rule;

class AddBrand extends Component
{

    public $manufacturers;

    public $selectedManufacturer = '';
    public $brand_name = '';
    public $note = '';

    public function mount()
    {
        $this->manufacturers = Manufacturer::all();
    }

    public function render()
    {
        if (auth()->check() && auth()->user()->role_id == 1) {
            return view('livewire.basic-data.brands.add-brand')->layout('components.layouts.superadmin');
        } else {
            return view('livewire.basic-data.brands.add-brand');
        }
    }

    public function addBrand()
    {
        $this->validate([
            'selectedManufacturer' => 'required|exists:manufacturers,id',
            'brand_name' => [
                'required',
                Rule::unique('brands', 'brand_name'),
            ],
            'note' => '',
        ], $this->customMessages());

        Brand::create([
            'manufacturer_id' => $this->selectedManufacturer,
            'brand_name' => $this->brand_name,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Новата Марка на возило е успешно додадена');
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
