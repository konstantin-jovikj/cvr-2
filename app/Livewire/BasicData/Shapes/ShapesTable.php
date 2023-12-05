<?php

namespace App\Livewire\BasicData\Shapes;

use App\Models\Shape;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class ShapesTable extends Component
{

    use WithPagination;


    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        $shapes = Shape::orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.basic-data.shapes.shapes-table', compact('shapes'));
    }

    public function deleteCategory(Shape $shape)
    {

        if ($shape) {
            $shape->delete();
            session()->flash('success', 'Обликот на каросерија е успешно избришан');
            $this->redirect(route('shapes.all'));
        } else {
            session()->flash('error', 'Настана грешка.Обликот на каросерија не може да се избрише');
            $this->redirect(route('shapes.all'));
        }
    }
}
