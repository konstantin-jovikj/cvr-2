<?php

namespace App\Livewire\BasicData\Types;

use App\Models\Brand;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypesTable extends Component
{
    use WithPagination;
    public $type;


    public function render()
    {
        $types = Type::Paginate(15);
        if (auth()->check() && auth()->user()->role_id == 1) {
            return view('livewire.basic-data.types.types-table', compact('types'))->layout('components.layouts.superadmin');
        }else{
            return view('livewire.basic-data.types.types-table', compact('types'));
        }
    }

    public function deleteType(Type $type)
    {
        if ($type) {
                $type->delete();
                session()->flash('success', 'Типот на возило е успешно избришан');
                $this->redirect(route('types.all'));
            } else {
                session()->flash('error', 'Се случи грешка. Типот на возило не може да се избрише');
                $this->redirect(route('types.all'));
            }
    }
}
