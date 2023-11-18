<?php

namespace App\Livewire\BasicData\Customers;

use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CustomersTable extends Component
{

    use WithPagination;

    public function render()
    {
        $localDepartmentId = Auth::user()->local_department_id;
        $customers = Customer::where('local_department_id', $localDepartmentId)->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.basic-data.customers.customers-table', compact('customers'));
    }
}
