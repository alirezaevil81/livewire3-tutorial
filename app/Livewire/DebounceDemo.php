<?php

namespace App\Livewire;

use Livewire\Component;

class DebounceDemo extends Component
{
    public $search = '';
    public $result = 'هنوز جستجویی انجام نشده';

    public function updatedSearch(): void
    {
        $this->result = "جستجو برای: {$this->search}";
    }

    public function render()
    {
        return view('livewire.debounce-demo');
    }
}