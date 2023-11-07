<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class MvrSuperAdminDashboard extends Component
{


    #[Layout('components.layouts.mvr-superadmin')]
    public function render()
    {
        return view('livewire.super-admin.mvr-super-admin-dashboard');
    }
}
