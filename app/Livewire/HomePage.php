<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HomePage extends Component
{


    // #[Layout('components.layouts.it-user')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
