<?php

namespace App\Livewire\Documents\Application;

use App\Models\User;
use Livewire\Component;
use App\Models\Application;
use Livewire\WithPagination;

class ApplicationTable extends Component
{

    use WithPagination;


    public function render()
    {
        $localDeptId = auth()->user()->local_department_id;

        $applications = Application::whereHas('user', function ($query) use ($localDeptId) {
            $query->where('local_department_id', $localDeptId);
        })->with('user', 'category')->paginate(10);

        $applications->loadMissing('category');

        // dd($applications);

        return view('livewire.documents.application.application-table', compact('applications'));
    }
}