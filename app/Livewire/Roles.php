<?php

namespace App\Livewire;

use App\Models\Permision;
use App\Models\Role;
use Livewire\Component;

class Roles extends Component
{

    public $roles;
    public $permissions;
    public  $permissionIds = [];
    public $selectedPermissions = [];

    public function mount(Role $roles, Permision $permissions)
    {
        $this->roles = Role::all();
        $this->permissions = Permision::all();
        $this->selectedPermissions = $roles->permisions->pluck('id')->toArray();
    }

    public function savePermissions(Role $role)
    {
        $role->permisions()->detach();
        // Update the permissions for the role in the pivot table

        foreach ($this->selectedPermissions as $selectedPermission) {
            $role->permisions()->attach($selectedPermission);
        }
        // $role->permisions()->sync($this->selectedPermissions);

        session()->flash('message', 'Permissions updated successfully.');
    }

    public function render()
    {
        return view('livewire.roles');
    }
}
