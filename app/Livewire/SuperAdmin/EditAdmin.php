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

        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->department = $user->department_id;
        $this->localDepartment = $user->local_department_id;

        $this->departments = Department::all();
        // $this->localDepartments = LocalDepartment::all();
        $this->localDepartments = LocalDepartment::where('department_id',$this->department)->get();
    }


    public function updatedDepartment($department)
    {
        $this->localDepartments = LocalDepartment::where('department_id', $department)->get();
    }

    public function updateAdmin()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'localDepartment' => 'required',
        ]);
        // $this->user->update($validated);
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'department_id' => $this->department,
            'local_department_id' => $this->localDepartment,
        ]);

        session()->flash('success', 'Администраторот е успешно ажуриран');
        $this->redirect(route('superadmin.dashboard'));
    }

    public function deleteAdmin(User $user)
    {
        dd($user);
    }
}
