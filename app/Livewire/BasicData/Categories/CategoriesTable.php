<?php

namespace App\Livewire\BasicData\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesTable extends Component
{

    use WithPagination;


    public function render()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.basic-data.categories.categories-table', compact('categories'));
    }

    public function deleteCategory(Category $category)
    {

        if ($category) {
            $category->delete();
            session()->flash('success', 'Категоријата е успешно избришана');
            $this->redirect(route('categories.all'));
        } else {
            session()->flash('error', 'Настана грешка.Категоријата не може да се избрише');
            $this->redirect(route('categories.all'));
        }
    }
}
