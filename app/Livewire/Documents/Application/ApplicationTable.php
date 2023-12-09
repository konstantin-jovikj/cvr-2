<?php

namespace App\Livewire\Documents\Application;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Application;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class ApplicationTable extends Component
{

    use WithPagination;

    public $search = '';
    public $startDate = '';
    public $endDate = '';

    public function render()
    {
        $localDeptId = auth()->user()->local_department_id;
        $searchTerm = '%' . trim($this->search) . '%';

        $applications = Application::whereHas('user', function ($query) use ($localDeptId) {
            $query->where('local_department_id', $localDeptId);
        })
            ->when($searchTerm, function ($query) use ($searchTerm) {
                $query->where(function ($query) use ($searchTerm) {
                    $query->where('app_number', 'LIKE', $searchTerm)
                        ->orWhere('vin_number', 'LIKE', $searchTerm)
                        ->orWhereHas('customer', function ($query) use ($searchTerm) {
                            $query->where('customer_name', 'LIKE', $searchTerm);
                        });
                });
            })
            ->when($this->startDate && $this->endDate, function ($query) {
                return $query->whereBetween('app_date', [
                    Carbon::parse($this->startDate)->startOfDay(),
                    Carbon::parse($this->endDate)->endOfDay(),
                ]);
            })
            ->with('user', 'category', 'customer')
            ->orderBy('created_at', 'desc')
            ->paginate(10);



        return view('livewire.documents.application.application-table', compact('applications'));
    }

}
