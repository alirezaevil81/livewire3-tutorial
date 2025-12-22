<?php

namespace App\Livewire;

use Livewire\Component;

class IgnoreDemo extends Component
{
    public $name = '';

    public function render()
    {
        return view('livewire.ignore-demo');
    }
}