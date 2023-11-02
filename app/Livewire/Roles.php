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
    public array $selectedPermissions = [];
    public array $rolePermissions;


    public function mount(Role $roles, Permision $permissions)
    {
        $this->roles = Role::all();
        $this->permissions = Permision::all();
        // $this->selectedPermissions = $roles->permisions->pluck('id')->toArray();
    }


    public function togglePermission($roleId, $permissionId)
    {
        $rolePermissions = $this->rolePermissions;

        if (!isset($rolePermissions[$roleId])) {
            $rolePermissions[$roleId] = [];
        }

        $role = Role::find($roleId);
        $existingPermissions = $role->permisions->pluck('id')->all();
        $rolePermissions[$roleId] = $existingPermissions;

        if (in_array($permissionId, $rolePermissions[$roleId], true)) {
            // Uncheck the permission
            $rolePermissions[$roleId] = array_diff($rolePermissions[$roleId], [$permissionId]);
        } else {
            array_push($rolePermissions[$roleId], $permissionId);
        }
        // Update the rolePermissions property
        $this->rolePermissions = $rolePermissions;

        // Synchronize permissions for the specific role
        $role->permisions()->sync($rolePermissions[$roleId]);

        session()->flash('message', 'Permissions updated successfully');
    }






    public function render()
    {
        return view('livewire.roles');
    }
}
