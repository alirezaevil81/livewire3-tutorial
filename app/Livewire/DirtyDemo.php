<?php

namespace App\Livewire;

use Livewire\Component;

class DirtyDemo extends Component
{
    public $text = 'متن اولیه';

    public function save()
    {
        // شبیه‌سازی ذخیره
        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.dirty-demo');
    }
}