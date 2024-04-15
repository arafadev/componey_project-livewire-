<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];

    public function skillDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->skill = Skill::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->skill->delete();
        $this->reset('skill');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
