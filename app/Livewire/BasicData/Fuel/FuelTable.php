<?php

namespace App\Livewire\BasicData\Fuel;

use App\Models\Fuel;
use Livewire\Component;

class FuelTable extends Component
{
    public function render()
    {
        $fuels = Fuel::all();
        return view('livewire.basic-data.fuel.fuel-table', compact('fuels'));
    }

    public function deleteFuel(Fuel $fuel)
    {

        if ($fuel) {
            $fuel->delete();
            session()->flash('success', 'Видот на Гориво е успешно избришан');
            $this->redirect(route('fuel.all'));
        } else {
            session()->flash('error', 'Настана грешка.Видот на Гориво не може да се избрише');
            $this->redirect(route('fuel.all'));
        }
    }
}
