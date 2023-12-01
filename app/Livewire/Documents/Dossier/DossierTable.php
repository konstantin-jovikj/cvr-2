<?php

namespace App\Livewire\Documents\Dossier;

use App\Models\Application;
use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class DossierTable extends Component
{
    use WithPagination;

    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        if (auth()->check()) {
            $userApplications = Application::where('user_id', auth()->user()->id)
                                            ->where('customer_id', $this->customer->id)
                                            ->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.documents.dossier.dossier-table', compact('userApplications'));
        } else {
            return redirect()->route('not.authorised');
        }
    }
}
