<?php

namespace App\Livewire;

use Livewire\Component;

class DoubleClickDemo extends Component
{
    public $message = 'هنوز دوبار کلیک نشده';

    public function doubleClicked()
    {
        $this->message = 'دو بار کلیک شد! 🎉';
    }

    public function render()
    {
        return view('livewire.double-click-demo');
    }
}