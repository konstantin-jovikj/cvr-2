<?php

namespace App\Livewire\BasicData\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Layout;

class EditCategory extends Component
{

    public $category_name;
    public $category_desc;
    public $appendix;
    public $note;

    public $category;

    public function mount(Category $category)
    {
        $this->category_name = $category->category_name;
        $this->category_desc = $category->category_desc;
        $this->appendix = $category->appendix;
        $this->note = $category->note;
    }


    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.basic-data.categories.edit-category');
    }

    public function updateCategory()
    {

        $validator = Validator::make(
            [
                'category_name' => $this->category_name,
                'category_desc' => $this->category_desc,
                'appendix' => $this->appendix,
                'note' => $this->note,
            ],
            [
                'category_name' => 'required|min:2',
                'category_desc' => 'required|min:5',
            ],
            $this->customMessages()
        );
        $validator->validate();



        $this->category->update([
            'category_name' => $this->category_name,
                'category_desc' => $this->category_desc,
                'appendix' => $this->appendix,
                'note' => $this->note,
        ]);

        session()->flash('success', 'Категоријата на возила е успешно ажурирана!');
        return redirect(route('categories.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'category_name.required' => 'Полето за Има на Категорија е задолжително.',
            'category_name.min' => 'Името на Категорија не може да има помалку од 2 карактери.',
            'category_desc.required' => 'Полето за Опис на Категорија е задолжително.',
            'category_desc.min' => 'Описот на Категорија не може да има помалку од 5 карактери.',
        ];
    }
}
