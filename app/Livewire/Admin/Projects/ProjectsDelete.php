<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project;
    protected $listeners = ['projectDelete'];

    public function projectDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->project = Project::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        unlink($this->project->image);
        $this->project->delete();
        $this->reset('project');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
