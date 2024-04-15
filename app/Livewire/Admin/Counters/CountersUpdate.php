<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{

    public $counter, $name, $count, $icon;
    protected $listeners = ['counterUpdate'];

    public function counterUpdate($id)
    {
        // fill $counter with the eloquent model of the same id
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->icon = $this->counter->icon;
        $this->count = $this->counter->count;
        $this->resetValidation();
        // show edit model 
        $this->dispatch('editModelToggle');
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'icon' => 'required',
            'count' => 'required|numeric',

        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save data in db
        $this->counter->update($data);
        // hide modal 
        $this->dispatch('editModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
