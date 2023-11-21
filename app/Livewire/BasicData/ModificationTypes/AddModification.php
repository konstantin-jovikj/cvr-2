<?php

namespace App\Livewire\BasicData\ModificationTypes;

use App\Models\ModificationType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AddModification extends Component
{

    public $modification_name = '';


    public function render()
    {
        return view('livewire.basic-data.modification-types.add-modification');
    }

    public function addModification()
    {

        $validator = Validator::make(
            [
                'modification_name' => $this->modification_name,
            ],
            [
                'modification_name' => 'required|min:3',
            ],
            $this->customMessages()
        );
        $validator->validate();

        ModificationType::create([
            'modification_name' => $this->modification_name,
        ]);

        session()->flash('success', 'Новиот вид на преправка / поправка е успешно додаден!');
        return redirect(route('modifications.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'modification_name.required' => 'Полето за вид на преправка / поправка е задолжително.',
            'modification_name.min' => 'Видот на преправка / поправка не може да има помалку од 3 карактери.',
        ];
    }
}
