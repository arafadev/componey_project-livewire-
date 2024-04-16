<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;
    public $project, $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::get();
    }

    protected $listeners = ['projectUpdate'];

    public function projectUpdate($id)
    {
        // fill $project with the eloquent model of the same id
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
        $this->description = $this->project->description;
        $this->resetValidation();
        // show edit model 
        $this->dispatch('editModelToggle');
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'required',
            'image' => 'nullable',
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

        if ($this->image) {
            // delete previous img
            unlink($this->project->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->project->update($data);
        // hide modal 
        $this->dispatch('editModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }

    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
