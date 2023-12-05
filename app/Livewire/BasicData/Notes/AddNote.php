<?php

namespace App\Livewire\BasicData\Notes;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class AddNote extends Component
{

    public $note_desc = '';
    public $note_text = '';

    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.notes.add-note');
    }

    public function addNote()
    {

        $validator = Validator::make(
            [
                'note_desc' => $this->note_desc,
                'note_text' => $this->note_text,
            ],
            [
                'note_desc' => 'required|min:3',
                'note_text' => 'required',
            ],
            $this->customMessages()
        );
        $validator->validate();

        Note::create([
            'note_desc' => $this->note_desc,
            'note_text' => $this->note_text,
        ]);

        session()->flash('success', 'Забелешката е успешно додадена!');
        return redirect(route('notes.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'note_desc.required' => 'Краткиот Опис е задолжителен.',
            'note_desc.min' => 'Краткиот Опис не може да има помалку од 3 карактери.',
            'note_text.required' => 'Текстот во Забелешката е задолжителен.',
        ];
    }
}
