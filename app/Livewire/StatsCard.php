<?php

namespace App\Livewire;

use Livewire\Component;

class StatsCard extends Component
{
    public $totalUsers;
    public $totalPosts;
    public $revenue;
    public function render()
    {
        usleep(800000);
        return view('livewire.stats-card');
    }
}
