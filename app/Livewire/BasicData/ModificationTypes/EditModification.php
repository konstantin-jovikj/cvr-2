<?php

namespace App\Livewire\BasicData\ModificationTypes;

use App\Models\ModificationType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditModification extends Component
{

    public $modification_name;
    public $modificationtype;


    public function mount(ModificationType $modificationtype)
    {
        // dd($modificationtype);
        $this->modificationtype = $modificationtype;
        $this->modification_name = $modificationtype->modification_name;
    }

    public function render()
    {
        return view('livewire.basic-data.modification-types.edit-modification');
    }

    public function updateModification()
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

        $this->modificationtype->update([
            'modification_name' => $this->modification_name,
        ]);

        session()->flash('success', 'Новиот вид на преправка / поправка е успешно ажурирана!');
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
