<?php

namespace App\Livewire;

use Livewire\Component;

class NavigateDemo extends Component
{
    public $page = 'خانه';

    public function render()
    {
        return view('livewire.navigate-demo');
    }
}