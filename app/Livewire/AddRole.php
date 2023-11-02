<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Role;
use Livewire\Component;

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

        $this->redirect(route('roles'));
        session()->flash('message', 'Новата Улога е успешно додадена');
    }

    public function render()
    {
        return view('livewire.add-role');
    }
}
