<?php

namespace App\Livewire;

use Livewire\Component;

class HeavyChart extends Component
{
    public function placeholder()
    {
        return view('livewire.placeholders.heavy-chart-placeholder');
    }

    public function render()
    {
        usleep(800000); // تأخیر مصنوعی برای تست

        return view('livewire.heavy-chart');
    }
}