<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $name, $description;
    protected $listeners = ['serviceShow'];

    public function serviceShow($id)
    {
        // fill $skill with the eloquent model of the same id
        $record = Service::find($id);
        $this->name = $record->name;
        $this->description = $record->description;
        $this->dispatch('showModelToggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
