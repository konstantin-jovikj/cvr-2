<?php

namespace App\Livewire\BasicData\Notes;

use App\Models\Note;
use Livewire\Component;

class NotesTable extends Component
{


    public function render()
    {
        $notes = Note::Paginate(5);
        return view('livewire.basic-data.notes.notes-table', compact('notes'));
    }

    public function deleteNote(Note $note)
    {

        if ($note) {
            $note->delete();
            session()->flash('success', 'Забелешката е успешно избришан');
            $this->redirect(route('notes.all'));
        } else {
            session()->flash('error', 'Настана грешка.Забелешката не може да се избрише');
            $this->redirect(route('notes.all'));
        }
    }
}
