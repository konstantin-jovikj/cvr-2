<?php

namespace App\Livewire\BasicData\Mediators;

use Livewire\Component;
use App\Models\Mediator;
use Illuminate\Support\Facades\Auth;

class MediatorsTable extends Component
{
    public function render()
    {
        $localDepartmentId = Auth::user()->local_department_id;
        $mediators = Mediator::where('local_department_id', $localDepartmentId)->get();
        return view('livewire.basic-data.mediators.mediators-table', compact('mediators'));
    }

    public function deleteMediator(Mediator $mediator)
    {

        if ($mediator) {
            $mediator->delete();
            session()->flash('success', 'Посредникот е успешно избришан');
            $this->redirect(route('mediators.all'));
        } else {
            session()->flash('error', 'Настана грешка.Посредникот не може да се избрише');
            $this->redirect(route('mediators.all'));
        }
    }
}
