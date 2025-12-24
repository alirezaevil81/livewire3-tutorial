<?php

namespace App\Livewire;

use Livewire\Component;

class ShowDemo extends Component
{
    public $showAdvanced = false;

    public function render()
    {
        return view('livewire.show-demo');
    }
}