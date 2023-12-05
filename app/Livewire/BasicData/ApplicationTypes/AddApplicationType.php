<?php

namespace App\Livewire\BasicData\ApplicationTypes;

use App\Models\ApplicationType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class AddApplicationType extends Component
{

    public $app_type_name = '';



    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.application-types.add-application-type');
    }

    public function addApplicationType()
    {

        $validator = Validator::make(
            [
                'app_type_name' => $this->app_type_name,
            ],
            [
                'app_type_name' => 'required|min:3',
            ],
            $this->customMessages()
        );
        $validator->validate();

        ApplicationType::create([
            'app_type_name' => $this->app_type_name,
        ]);

        session()->flash('success', 'новиот тип на Барање е успешно додаден!');
        return redirect(route('applicationtype.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'app_type_name.required' => 'Полето за Тип на Барање е задолжително.',
            'app_type_name.min' => 'Типот на Барањето не може да има помалку од 3 карактери.',
        ];
    }
}
