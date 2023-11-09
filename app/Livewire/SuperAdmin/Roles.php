<?php

namespace App\Livewire\SuperAdmin;

use App\Models\Role;
use Livewire\Component;
use App\Models\Permision;
use Livewire\Attributes\Layout;

class Roles extends Component
{

    public $roles;
    public $permissions;
    public  $permissionIds = [];
    public array $selectedPermissions = [];
    public array $rolePermissions;


    public function mount(Role $roles, Permision $permissions)
    {
        // $this->roles = Role::all();
        $this->roles = Role::where('role_name', '!=', 'SuperAdmin')->get();
        $this->permissions = Permision::all();
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
    }


    public function deleteRole(Role $role)
    {
        // $role = Role::find($id);

        if ($role) {
            if ($role->permisions()->count() > 0) {
                session()->flash('error', 'Улогата не може да се избрише. Улогата содржи овластувања');
                $this->redirect(route('roles'));

                // $this->js("alert('Улогата не може да се избрише затоа што им припаѓа на одредени корисници!')");
            } else {
                $role->delete();
                session()->flash('success', 'Улогата е успешно избришана');
                // $this->js("alert('Улогата е успешно избришана!')");
            }
        } else {
            // session()->flash('warning', 'Улогата не постои');
            $this->js("alert('Улогата не постои')");
        }

        return redirect(route('roles'));
    }


#[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.roles');
    }
}
