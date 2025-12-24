<?php

namespace App\Livewire;

use Livewire\Attributes\Session;
use Livewire\Component;

class SessionDemo extends Component
{
    #[Session]
    public $theme = 'light';

    #[Session]
    public $language = 'fa';

    #[Session]
    public $notifications = true;

    public function render()
    {
        return view('livewire.session-demo');
    }
}