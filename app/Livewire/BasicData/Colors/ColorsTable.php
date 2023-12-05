<?php

namespace App\Livewire\BasicData\Colors;

use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class ColorsTable extends Component
{
    use WithPagination;


    #[Layout('components.layouts.superadmin')]
    public function render()
    {   $colors = Color::orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.basic-data.colors.colors-table', compact('colors'));
    }

    public function deleteColor(Color $color)
    {

        if ($color) {
            $color->delete();
            session()->flash('success', 'Бојата е успешно избришана');
            $this->redirect(route('colors.all'));
        } else {
            session()->flash('error', 'Настана грешка.Бојата не може да се избрише');
            $this->redirect(route('colors.all'));
        }
    }
}
