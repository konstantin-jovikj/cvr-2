<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class EditUserForm extends Component
{

    public $roles;
    public $user ;

    // #[Rule('required')]
    public $name;

    // #[Rule('required|email')]
    public $email;

    // #[Rule('required')]
    public $role_id;

    public function fetchRoles()
    {
        $this->roles = Role::all();
    }
    public function render()
    {
        return view('livewire.edit-user-form');
    }

    public function mount(User $user)
    {
        $this->fetchRoles();
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;

    }

    public function saveUserUpdate()
    {

        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
        ]);


        $this->user->update($validated);

        $this->redirect(route('users'));
        session()->flash('message', 'User updated successfully.');

    }
}
