<?php

namespace App\Livewire\Documents\Application;

use App\Models\User;
use Livewire\Component;
use App\Models\Application;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class ApplicationTable extends Component
{

    use WithPagination;


    public function render()
    {
        $localDeptId = auth()->user()->local_department_id;

        $applications = Application::whereHas('user', function ($query) use ($localDeptId) {
            $query->where('local_department_id', $localDeptId);
        })->with('user', 'category')->orderBy('created_at', 'desc')->paginate(10);

        // $applications = Application::whereHas('user', function ($query) use ($localDeptId) {
        //     $query->where('local_department_id', $localDeptId);
        // })
        // ->with('user', 'category')
        // ->select('id', 'app_date', 'app_number', 'customer_id', 'category_id', 'note', 'has_certificate', 'created_at', 'vin_number')
        // ->orderBy('created_at', 'desc')
        // ->paginate(10);

        $applications->loadMissing('category');

        // dd($applications);

        return view('livewire.documents.application.application-table', compact('applications'));
    }

}
