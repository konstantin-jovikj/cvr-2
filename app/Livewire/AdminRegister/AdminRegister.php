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
    // use Department;
    public $localDepartments;
    public $department;
    public $user;

    #[Rule('required')] 
    public $name = '';

    #[Rule('required|email|unique:users,email')]
    public $email = '';

    #[Rule('required|min:8|confirmed')] 
    public $password = '';

    #[Rule('required')] 
    public $password_confirmation = '';

    #[Rule('required|int')] 
    public $local_department_id = '';


    public function getLocalDepartment()
    {
        $this->user = Auth::user()->department_id;
        $this->localDepartments = LocalDepartment::where('department_id', $this->user)->get();
    }

    public function mount()
    {
        $this->getLocalDepartment();
    }

    public function registerAdmin()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' =>$this->email,
            'password' => Hash::make($this->password),
            'department_id' => $this->user,
            'local_department_id' => $this->local_department_id
        ]);

        session()->flash('message', 'Registration successful!');
        $this->reset();
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.admin-register.admin-register');
    }
}
