<?php

namespace App\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\LocalDepartment;
use Livewire\Attributes\Layout;

class SuperAdminDashboard extends Component
{

    use WithPagination;

    public $users;
    public $departments;

    public $filterDepartment = null;
    public $filterLocalDepartment = null;

    public $localDepartments;

    public function mount()
    {
        $this->departments = Department::all();
        $this->loadUsers();
        $this->localDepartments = [];
    }

    public function loadUsers()
    {
        $query = User::where('role_id',  2);

        if ($this->filterDepartment) {
            $query->where('department_id', $this->filterDepartment);
        }
        if ($this->filterLocalDepartment) {
            $query->where('local_department_id', $this->filterLocalDepartment);
        }

        $this->users = $query->get();
        // $this->users = $query->paginate(10);
    }


    public function updatedFilterDepartment($department)
    {

        $this->loadUsers();
        $this->localDepartments = LocalDepartment::where('department_id', $department)->get();
    }

    public function updatedfilterLocalDepartment()
    {
        $this->loadUsers();
    }

    public function resetFilter()
    {
        $this->filterDepartment = null;
        $this->filterLocalDepartment = null;
        $this->loadUsers();
    }

    public function deleteAdmin(User $user)
    {

        if ($user) {
            $user->delete();
            session()->flash('success', 'Администраторот е успешно избришан');
            $this->redirect(route('superadmin.dashboard'));
        } else {
            session()->flash('error', 'Не може да се избрише администраторот');
            $this->redirect(route('superadmin.dashboard'));
        }
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.super-admin-dashboard');
    }
}
