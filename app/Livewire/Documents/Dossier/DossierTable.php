<?php

namespace App\Livewire\Documents\Dossier;

use Livewire\Component;
use App\Models\Customer;

class DossierTable extends Component
{
    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.documents.dossier.dossier-table');
    }
}
