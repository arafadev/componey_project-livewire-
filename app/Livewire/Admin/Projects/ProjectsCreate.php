<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    public $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::get();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [

            'category_id' => 'Category',
        ];
    }
    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        $data['image'] = 'storage/images/' . $imageName;
        // save data in db
        Project::create($data);
        $this->reset(['name', 'description', 'link', 'image', 'category_id']);
        // hide modal 
        $this->dispatch('createModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
