<?php

namespace App\Livewire;

use Livewire\Component;

class SnapshotDemo extends Component
{
    public $items = [];

    public $counter = 0;

    public function mount()
    {
        // لیست بزرگ با ۱۰۰ آیتم
        for ($i = 1; $i <= 100; $i++) {
            $this->items[] = "آیتم شماره $i";
        }
    }

    public function increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.snapshot-demo');
    }
}