<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class StpSuperAdminDashboard extends Component
{


    #[Layout('components.layouts.stp-superadmin')]
    public function render()
    {
        return view('livewire.super-admin.stp-super-admin-dashboard');
    }
}
