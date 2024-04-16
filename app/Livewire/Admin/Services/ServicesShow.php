<?php

namespace App\Livewire\Admin\Services;

use App\Livewire\Admin\Messages\MessagesData;
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
        $this->dispatch('refreshData')->to(MessagesData::class);

    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
