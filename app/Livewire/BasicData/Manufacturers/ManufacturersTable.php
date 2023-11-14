<?php

namespace App\Livewire\BasicData\Manufacturers;

use Livewire\Component;
use App\Models\Manufacturer;
use Livewire\WithPagination;

class ManufacturersTable extends Component
{

    use WithPagination;
    public $manufacturer;


    public function render()
    {
        $manufacturers = Manufacturer::Paginate(10);
        return view('livewire.basic-data.manufacturers.manufacturers-table', compact('manufacturers'));
    }


    public function deleteManufacturer(Manufacturer $manufacturer)
    {

        if ($manufacturer) {
            $manufacturer->delete();
            session()->flash('success', 'Производителот е успешно избришан');
            $this->redirect(route('manufacturers.all'));
        } else {
            session()->flash('error', 'Настана грешка.ПРоизводителот не мозе да се избрише');
            $this->redirect(route('manufacturers.all'));
        }
    }
}
