<?php

namespace App\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use App\Models\LocalDepartment;
use Illuminate\Validation\Rule;
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
        $this->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],
            'department' => [
                'required',
                Rule::exists('departments', 'id'),
            ],
            'localDepartment' => [
                'required',
                Rule::exists('local_departments', 'id'),
            ],
        ],$this->customMessages());

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
        if ($user) {
                $user->delete();
                session()->flash('success', 'Администраторот е успешно избришан');
                $this->redirect(route('superadmin.dashboard'));
            } else {
                session()->flash('error', 'Се случи грешка. Администраторот не може да се избрише');
                $this->redirect(route('superadmin.dashboard'));
            }
    }

    public function customMessages()
{
    return [
        'name.required' => 'Полето за име е задолжително.',
        'email.required' => 'Полето за емаил е задолжително.',
        'email.email' => 'Внесете валидна емаил адреса.',
        'email.unique' => 'Оваа емаил веќе се користи.',
        'department.required' => 'Полето за сектор е задолжително.',
        'department.exists' => 'Изберете валиден сектор.',
        'localDepartment.required' => 'Полето за оддел е задолжително.',
        'localDepartment.exists' => 'Изберете валиден оддел.',
    ];
}
}
