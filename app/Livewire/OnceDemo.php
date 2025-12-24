<?php

namespace App\Livewire;

use Livewire\Component;

class OnceDemo extends Component
{
    public $message = 'هنوز چیزی اتفاق نیفتاده';

    public function doSomething()
    {
        $this->message = 'این عملیات فقط یک بار انجام شد!';
    }

    public function render()
    {
        return view('livewire.once-demo');
    }
}