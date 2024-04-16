<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesUpdate extends Component
{
    public $name, $category;
    protected $listeners = ['categoryUpdate'];

    public function categoryUpdate($id)
    {
        // fill $category with the eloquent model of the same id
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        // show edit model 
        $this->dispatch('editModelToggle');
    }
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save data in db
        $this->category->update($data);
        // hide modal 
        $this->dispatch('editModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
