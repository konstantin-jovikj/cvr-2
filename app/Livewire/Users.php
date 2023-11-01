<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $users;
    public $roles;
    public $role_id;
    public $id;

    public function fetchRoles()
    {
        $this->roles = Role::all();
    }

    public function fetchUsers()
    {
        $this->users = User::all();
    }


    public function mount()
    {
        $this->fetchUsers();
        $this->fetchRoles();
    }

    public function render()
    {
        return view('livewire.users');
    }
}
