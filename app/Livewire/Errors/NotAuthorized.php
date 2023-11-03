<?php

namespace App\Livewire\Errors;

use Livewire\Component;

class NotAuthorized extends Component
{
    public function render()
    {
        return view('livewire.errors.not-authorized');
    }
}
