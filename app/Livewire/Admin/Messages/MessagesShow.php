<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    public $name, $email, $subject, $message;
    protected $listeners = ['messageShow'];

    public function messageShow($id)
    {
        // fill $skill with the eloquent model of the same id
        $record = Message::find($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        $record->update(['status' => '1']);
        $this->dispatch('showModelToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);


    }
    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
