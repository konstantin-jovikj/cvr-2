<?php

namespace App\Livewire\SuperAdmin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class SuperAdminDashboard extends Component
{

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.super-admin-dashboard');
    }
}
