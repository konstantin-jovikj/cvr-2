<?php

namespace App\Livewire\BasicData\RelatedDocs;

use App\Models\Relateddocuments;
use Livewire\Component;

class RelatedDocsTable extends Component
{
    public function render()
    {
        $relatedDocs = Relateddocuments::all();
        return view('livewire.basic-data.related-docs.related-docs-table', compact('relatedDocs'));
    }

    public function deleteRelatedDocs(Relateddocuments $relateddocuments)
    {

        if ($relateddocuments) {
            $relateddocuments->delete();
            session()->flash('success', 'Прилог Документот е успешно избришан');
            $this->redirect(route('relateddocs.all'));
        } else {
            session()->flash('error', 'Настана грешка.Прилог Документот не може да се избрише');
            $this->redirect(route('relateddocs.all'));
        }
    }
}
