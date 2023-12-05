<?php

namespace App\Livewire\BasicData\ApplicationTypes;

use App\Models\ApplicationType;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ApplicationTypeTable extends Component
{

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        $applicationTypes = ApplicationType::all();
        return view('livewire.basic-data.application-types.application-type-table', compact('applicationTypes'));
    }

    public function deleteApplicationType(ApplicationType $applicationType)
    {

        if ($applicationType) {
            $applicationType->delete();
            session()->flash('success', 'Типот на Барање е успешно избришан');
            $this->redirect(route('applicationtype.all'));
        } else {
            session()->flash('error', 'Настана грешка.Типот на Барање не може да се избрише');
            $this->redirect(route('applicationtype.all'));
        }
    }
}
