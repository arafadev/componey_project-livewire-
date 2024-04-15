<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $service, $name, $description, $icon;
    protected $listeners = ['serviceUpdate'];

    public function serviceUpdate($id)
    {
        // fill $service with the eloquent model of the same id
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->icon = $this->service->icon;
        $this->description = $this->service->description;
        $this->resetValidation();
        // show edit model 
        $this->dispatch('editModelToggle');
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'icon' => 'required',
            'description' => 'required|string',

        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save data in db
        $this->service->update($data);
        // hide modal 
        $this->dispatch('editModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
