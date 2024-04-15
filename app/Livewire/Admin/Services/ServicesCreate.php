<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name, $description, $icon;
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'icon' => 'required',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save data in db
        Service::create($data);
        $this->reset(['name', 'description', 'icon']);
        // hide modal 
        $this->dispatch('createModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-create');
    }
}
