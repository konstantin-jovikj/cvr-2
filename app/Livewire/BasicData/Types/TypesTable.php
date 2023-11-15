<?php

namespace App\Livewire\BasicData\Types;

use App\Models\Brand;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypesTable extends Component
{
    use WithPagination;



    public function render()
    {
        $types = Type::Paginate(15);
        return view('livewire.basic-data.types.types-table', compact('types'));
    }
}
