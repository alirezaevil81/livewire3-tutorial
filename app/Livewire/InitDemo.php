<?php

namespace App\Livewire;

use Livewire\Component;

class InitDemo extends Component
{
    public $message = 'هنوز چیزی نمایش داده نشده';

    public function showWelcome()
    {
        $this->message = 'خوش آمدید! این پیام با wire:init نمایش داده شد.';
        // اینجا می‌توانی هر کار دیگری مثل dispatch به JS انجام دهی
        $this->dispatch('welcome-shown');
    }

    public function render()
    {
        return view('livewire.init-demo');
    }
}