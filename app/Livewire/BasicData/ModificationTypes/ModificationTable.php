<?php

namespace App\Livewire\BasicData\ModificationTypes;

use App\Models\ModificationType;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ModificationTable extends Component
{

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        $modificationTypes = ModificationType::all();
        return view('livewire.basic-data.modification-types.modification-table', compact('modificationTypes'));
    }

    public function deleteModificationType(ModificationType $modificationtype)
    {

        if ($modificationtype) {
            $modificationtype->delete();
            session()->flash('success', 'Преправката / Поправката е успешно избришана');
            $this->redirect(route('modifications.all'));
        } else {
            session()->flash('error', 'Настана грешка.Преправката / Поправката не може да се избрише');
            $this->redirect(route('modifications.all'));
        }
    }
}
