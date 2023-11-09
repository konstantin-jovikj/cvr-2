<?php

namespace App\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use App\Models\LocalDepartment;
use Livewire\Attributes\Layout;

class EditAdmin extends Component
{

    public $departments;
    public $localDepartments;

    public $user;
    public $name;
    public $email;
    public $department = '';
    public $localDepartment = '';

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.edit-admin');
    }



    public function mount(User $user){
        $this->departments = Department::all();
        $this->localDepartments = LocalDepartment::all();

        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->department = $user->department_id;
        $this->localDepartment = $user->local_department_id;
        // if($this->department){

        // }
        // $this->localDepartment = LocalDepartment::where('department_id', $user->department_id)->get();

    }


    public function updatedDepartment($department)
    {
        $this->localDepartments = LocalDepartment::where('department_id', $department)->get();
    }
}
