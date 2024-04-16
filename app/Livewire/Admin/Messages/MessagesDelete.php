<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;
    protected $listeners = ['messageDelete'];

    public function messageDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->message = Message::find($id);
        // show delete model 
        $this->dispatch('deleteModelToggle');
    }
    public function submit()
    {
        $this->message->delete();
        $this->reset('message');
        // hide modal 
        $this->dispatch('deleteModelToggle');
        // refresh skills table
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
