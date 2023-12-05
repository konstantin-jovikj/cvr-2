<?php

namespace App\Livewire\BasicData\RelatedDocs;

use App\Models\Relateddocuments;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class EditRelatedDoc extends Component
{

    public $desc;
    public $relateddocuments;

    public function mount(Relateddocuments $relateddocuments)
    {
        $this->desc = $relateddocuments->desc;
    }

    #[Layout('components.layouts.superadmin')]
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

        $sanitizedText = str_replace('.', '', $this->desc);

        $this->relateddocuments->update([
            'desc' => $sanitizedText,
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
