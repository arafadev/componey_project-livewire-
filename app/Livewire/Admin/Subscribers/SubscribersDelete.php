<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribersDelete extends Component
{

    public $subscriber;
    protected $listeners = ['subscriberDelete'];

    public function subscriberDelete($id)
    {
        // fill $subscriber with the eloquent model of the same id
        $this->subscriber = Subscriber::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->subscriber->delete();
        $this->reset('subscriber');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh subscribers table
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
