<?php

namespace App\Livewire\BasicData\Brands;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class BrandsTable extends Component
{
    use WithPagination;



    public function render()
    {
        $brands = Brand::Paginate(15);
        if (auth()->check() && auth()->user()->role_id == 1) {
            return view('livewire.basic-data.brands.brands-table', compact('brands'))->layout('components.layouts.superadmin');
        }else{
            return view('livewire.basic-data.brands.brands-table', compact('brands'));
        }
    }

    public function deleteBrand(Brand $brand)
    {

        if ($brand) {
            $brand->delete();
            session()->flash('success', 'Марката на Возило е успешно избришана');
            $this->redirect(route('brands.all'));
        } else {
            session()->flash('error', 'Настана грешка.Марката на возило не може да се избрише');
            $this->redirect(route('brands.all'));
        }
    }
}
