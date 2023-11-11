<?php

namespace App\Livewire\AdminRegister;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Department;
use Livewire\Attributes\Rule;
use App\Models\LocalDepartment;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegister extends Component
{
    public $departments;
    public $localDepartments;

    public $selectedDepartment = null;
    public $local_department_id = null;

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function mount()
    {
        $this->departments = Department::all();
        $this->localDepartments = [];
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.admin-register.admin-register');
    }

    public function updatedSelectedDepartment($department)
    {
        $this->localDepartments = LocalDepartment::where('department_id', $department)->get();
        $this->local_department_id = null;
    }





    public function registerAdmin()
    {
        $validator = Validator::make(
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'selectedDepartment' => $this->selectedDepartment,
                'local_department_id' => $this->local_department_id,
            ],
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'selectedDepartment' => 'required|exists:departments,id',
                'local_department_id' => 'required|exists:local_departments,id',
            ],
            $this->customMessages()
        );

        $validator->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'department_id' => $this->selectedDepartment,
            'role_id' => 2,
            'local_department_id' => $this->local_department_id,
        ]);

        session()->flash('success', 'Корисникот е успешно додаден!');

        if (Auth::user()->role_id == 1 && Auth::user()->department_id == null) {
            return redirect(route('superadmin.dashboard'));
        }

        $this->reset();
    }

    public function customMessages()
    {
        return [
            'name.required' => 'Полето за име е задолжително.',
            'email.required' => 'Полето за емаил е задолжително.',
            'email.email' => 'Внесете валидна емаил адреса.',
            'email.unique' => 'Оваа емаил адреса веќе постои.',
            'password.required' => 'Полето за лозинка е задолжително.',
            'password.min' => 'Лозинката мора да биде најмалку 6 карактери.',
            'selectedDepartment.required' => 'Полето за сектор е задолжително.',
            'selectedDepartment.exists' => 'Изберете валиден сектор.',
            'local_department_id.required' => 'Полето за оддел е задолжително.',
            'local_department_id.exists' => 'Изберете валиден оддел.',
        ];
    }




}
