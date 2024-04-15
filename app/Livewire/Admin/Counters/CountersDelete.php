<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected $listeners = ['counterDelete'];

    public function counterDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->counter = Counter::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->counter->delete();
        $this->reset('counter');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
