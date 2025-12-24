<?php

namespace App\Livewire;

use Livewire\Component;

class ReplaceDemo extends Component
{
    public $status = 'initial';

    public function changeToSuccess()
    {
        $this->status = 'success';
    }

    public function changeToError()
    {
        $this->status = 'error';
    }

    public function render()
    {
        return view('livewire.replace-demo');
    }
}