<?php

namespace App\Livewire;

use Livewire\Component;

class PollDemo extends Component
{
    public $time;

    public function mount()
    {
        $this->time = now()->format('H:i:s');
    }

    public function refreshTime()
    {
        $this->time = now()->format('H:i:s');
    }

    public function render()
    {
        return view('livewire.poll-demo');
    }
}