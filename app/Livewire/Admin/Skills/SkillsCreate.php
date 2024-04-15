<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name, $progress;

  

    public function rules()
    {
        return [

            'name' => 'required',
            'progress' => 'required|numeric',

        ];
    }


    public function submit()
    {
        $data = $this->validate();
        // save data in db
        Skill::create($data);
        $this->reset(['name', 'progress']);
        // hide modal 
        $this->dispatch('createModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
