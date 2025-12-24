<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class LockedDemo extends Component
{
    #[Locked]
    public $role = 'admin'; // فقط سرور می‌تواند تغییر دهد

    public $name = '';

    public function changeRole()
    {
        // فقط این متد می‌تواند role را تغییر دهد
        $this->role = 'super-admin';
    }

    public function render()
    {
        return view('livewire.locked-demo');
    }
}