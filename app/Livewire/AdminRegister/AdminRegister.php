<?php

namespace App\Livewire\AdminRegister;

use App\Models\User;
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

    #[Rule('required')]
    public $name = '';

    #[Rule('required|email|unique:users,email')]
    public $email = '';

    #[Rule('required|min:8|confirmed')]
    public $password = '';

    #[Rule('required')]
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
        $this->validate();

        // dd($this->selectedDepartment,$this->local_department_id );

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'department_id' => $this->selectedDepartment,
            'role_id' => 2,
            'local_department_id' => $this->local_department_id
        ]);

        session()->flash('success', 'Корисникот е успешно додаден!');

        if (Auth::user()->role_id == 1 && Auth::user()->department_id == null) {
            return redirect(route('superadmin.dashboard'));
        }
        $this->reset();
    }




}
