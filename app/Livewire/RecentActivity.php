<?php

namespace App\Livewire;

use Livewire\Component;

class RecentActivity extends Component
{
    public function placeholder()
    {
        return view('livewire.placeholders.recent-activity-placeholder');
    }

    public function render()
    {
        usleep(800000);

        return view('livewire.recent-activity');
    }
}