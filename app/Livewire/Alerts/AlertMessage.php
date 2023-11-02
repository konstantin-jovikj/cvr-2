<?php

namespace App\Livewire\Alerts;

use Livewire\Component;

class AlertMessage extends Component
{

    public $success = '';
    public $danger = '';
    public $warning = '';


    public function hideAlert($type)
    {
        $this->$type = '';
    }


    public function render()
    {
        return view('livewire.alerts.alert-message');
    }
}
