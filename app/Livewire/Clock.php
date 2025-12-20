<?php

namespace App\Livewire;

use DateTime;
use Livewire\Component;

class Clock extends Component
{

    public $time;

    public function mount()
    {
        $this->time = (new DateTime())->format('Y-m-d H:i:s');
    }

    public function updateTime()
    {
        $this->time = (new DateTime())->format('Y-m-d H:i:s');
    }

    public function render()
    {
        return view('livewire.clock');
    }
}
