<?php

namespace App\Livewire\SuperAdmin;
use Livewire\Attributes\Layout;

use Livewire\Component;

class ItLocalDep extends Component
{



    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.it-local-dep');
    }
}
