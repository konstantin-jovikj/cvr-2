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

    // #[Rule('required')]
    // public $role_id = 2;

    #[Rule('required|email|unique:users,email')]
    public $email = '';

    #[Rule('required|min:8|confirmed')]
    public $password = '';

    #[Rule('required')]
    public $password_confirmation = '';

    #[Rule('required|int')]
    public $local_department_id;


    public function getLocalDepartment()
    {
        $this->user = Auth::user()->department_id;
        $this->localDepartments = LocalDepartment::where('department_id', $this->user)->get();

        // Set $local_department_id to the first option if available
        if (!$this->localDepartments->isEmpty()) {
            $this->local_department_id = $this->localDepartments[0]->id;
        } else {
            // Set $local_department_id to an empty string if no options are available
            $this->local_department_id = '';
        }
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
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'department_id' => $this->user,
            'role_id' => 2,
            'local_department_id' => $this->local_department_id
        ]);

        session()->flash('message', 'Registration successful!');

        if (Auth::user()->role_id == 1 && Auth::user()->department_id == 1) {
            return redirect(route('mvrsuperadmin.dashboard'));
        }
        if (Auth::user()->role_id == 1 && Auth::user()->department_id == 2) {
            return redirect(route('superadmin.dashboard'));
        }
        if (Auth::user()->role_id == 1 && Auth::user()->department_id == 3) {
            return redirect(route('stpsuperadmin.dashboard'));
        }
        $this->reset();
    }

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.admin-register.admin-register');
    }
}
