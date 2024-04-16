<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category;
    protected $listeners = ['categoryDelete'];

    public function categoryDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->category = Category::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->category->delete();
        $this->reset('category');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
