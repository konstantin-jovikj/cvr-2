<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;

class AddRole extends Component
{
    public $role_name = '';

    public function addNewRole()
    {
        $role = Role::create([
            'role_name' => $this->role_name
        ]);
        $role->save();
        $this->redirect(route('roles'));
        session()->flash('message', 'Новата Улога е успешно додадена');
    }

    public function render()
    {
        return view('livewire.add-role');
    }
}
