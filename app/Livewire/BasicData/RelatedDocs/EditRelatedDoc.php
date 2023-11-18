<?php

namespace App\Livewire\BasicData\RelatedDocs;

use App\Models\Relateddocuments;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditRelatedDoc extends Component
{

    public $desc;
    public $relateddocuments;

    public function mount(Relateddocuments $relateddocuments)
    {
        $this->desc = $relateddocuments->desc;
    }


    public function render()
    {
        return view('livewire.basic-data.related-docs.edit-related-doc');
    }

    public function updateRelatedDoc()
    {

        $validator = Validator::make(
            [
                'desc' => $this->desc,
            ],
            [
                'desc' => 'required|min:10',
            ],
            $this->customMessages()
        );
        $validator->validate();

        $this->relateddocuments->update([
            'desc' => $this->desc,
        ]);

        session()->flash('success', 'Новиот Прилог Документ е успешно ажуриран!');
        return redirect(route('relateddocs.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'desc.required' => 'Описот на Документот е задолжителен.',
            'desc.min' => 'Описот на Документот не може да има помалку од 10 карактери.',
        ];
    }
}
