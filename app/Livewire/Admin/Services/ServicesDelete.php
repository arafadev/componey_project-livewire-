<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;
    protected $listeners = ['serviceDelete'];

    public function serviceDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->service = Service::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->service->delete();
        $this->reset('service');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
