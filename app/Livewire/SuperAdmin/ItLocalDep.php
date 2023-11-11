<?php

namespace App\Livewire\SuperAdmin;

use App\Models\LocalDepartment;
use Livewire\Attributes\Layout;

use Livewire\Component;

class ItLocalDep extends Component
{


    public $localDepartments;

    public function mount()
    {
        $this->localDepartments = LocalDepartment::where('department_id', 2)->orderByDesc('created_at')->get();
    }


    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.it-local-dep');
    }


    public function deleteIt(LocalDepartment $localDepartment)
    {

        if ($localDepartment) {
            $localDepartment->delete();
            session()->flash('success', 'Инспекциското тело е успешно избришано');
            $this->redirect(route('inspekciski.tela'));
        } else {
            session()->flash('error', 'Инспекциското тело не може да се избрише');
            $this->redirect(route('inspekciski.tela'));
        }
    }
}
