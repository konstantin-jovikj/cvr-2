<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Attributes\Rule;
use App\Models\Role;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AddRole extends Component
{
    #[Rule('required|min:3')]
    public $role_name = '';

    public function addNewRole()
    {
        $this->validate();

        Role::create([
            'role_name' => $this->role_name
        ]);

        session()->flash('success', 'Новата Улога е успешно додадена');
        $this->redirect(route('roles'));
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.add-role');
    }
}
