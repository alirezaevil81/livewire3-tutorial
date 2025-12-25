<?php

namespace App\Livewire;

use Livewire\Component;
use App\Events\MessageSent;

class RealtimeChat extends Component
{
    public $messages = [];
    public $newMessage = '';

    public function mount()
    {
        $this->messages = ['سلام! چت realtime شروع شد.'];
    }

    public function sendMessage()
    {
        if (trim($this->newMessage) !== '') {
            $message = $this->newMessage;
            $this->newMessage = '';

            broadcast(new MessageSent($message))->toOthers();

            $this->messages[] = $message;
        }
    }

    public function render()
    {
        return view('livewire.realtime-chat');
    }
}