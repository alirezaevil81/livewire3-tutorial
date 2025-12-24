<?php

namespace App\Livewire;

use Livewire\Component;

class ResetDemo extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    public function submitAllReset()
    {
        // همه فیلدها پاک می‌شوند
        $this->reset();
    }

    public function submitKeepName()
    {
        // فقط name نگه داشته می‌شود
        $this->resetExcept('name');
    }

    public function render()
    {
        return view('livewire.reset-demo');
    }
}