<?php

namespace App\Livewire\BasicData\ApplicationTypes;

use App\Models\ApplicationType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditApplicationType extends Component
{

    public $app_type_name;
    public $applicationtype;

    public function mount(ApplicationType $applicationtype)
    {
        $this->app_type_name = $applicationtype->app_type_name;
    }

    public function render()
    {
        return view('livewire.basic-data.application-types.edit-application-type');
    }

    public function updateApplicationType()
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

        $this->applicationtype->update([
            'app_type_name' => $this->app_type_name,
        ]);

        session()->flash('success', 'Новиот тип на Барање е успешно ажуриран!');
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
