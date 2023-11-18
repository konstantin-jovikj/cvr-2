<?php

namespace App\Livewire\BasicData\Mediators;

use App\Models\Mediator;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditMediator extends Component
{

    public $mediator_name;
    public $mediator_address;
    public $mediator_phone;
    public $note;

    public $mediator;


    public function mount(Mediator $mediator)
    {
        $this->mediator_name = $mediator->mediator_name;
        $this->mediator_address = $mediator->mediator_address;
        $this->mediator_phone = $mediator->mediator_phone;
        $this->note = $mediator->note;
    }

    public function render()
    {
        return view('livewire.basic-data.mediators.edit-mediator');
    }


    public function addMediator()
    {

        $validator = Validator::make(
            [
                'mediator_name' => $this->mediator_name,
                'mediator_address' => $this->mediator_address,
                'mediator_phone' => $this->mediator_phone,
                'note' => $this->note,
            ],
            [
                'mediator_name' => 'required|min:3',
                'mediator_address' => 'required|min:6',
                // allow 0 to 9 and "/" and '-'
                'mediator_phone' => 'required|regex:/^[0-9\/\-]+$/|min:9',
            ],
            $this->customMessages()
        );
        $validator->validate();

        $this->mediator->update([
            // 'local_department_id' => auth()->user()->local_department_id,
            'mediator_name' => $this->mediator_name,
            'mediator_address' => $this->mediator_address,
            'mediator_phone' => $this->mediator_phone,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Посредникот е успешно Ажуриран!');
        return redirect(route('mediators.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'mediator_name.required' => 'Името на посредникот е задолжително.',
            'mediator_name.min' => 'Името на посредникот не може да биде помалку од 3 карактери.',
            'mediator_address.required' => 'Адресата на посредникот е задолжителна.',
            'mediator_address.min' => 'Адресата на посредникот не може да биде помала од 6 карактери.',
            'mediator_phone.required' => 'Телефонот на посредникот е задолжителен.',
            'mediator_phone.regex' => 'Телефонот на посредникот може да содржи само цифри, "/" и "-".',
            'mediator_phone.min' => 'Телефонот на посредникот не може да биде помалку од 9 карактери.',
        ];
    }
}
