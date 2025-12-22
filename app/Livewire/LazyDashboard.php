<?php

namespace App\Livewire;

use Livewire\Component;

class LazyDashboard extends Component
{
    public $totalUsers = 1247;
    public $totalPosts = 892;
    public $revenue = 45678;

    public function render()
    {
        return view('livewire.lazy-dashboard');
    }
}