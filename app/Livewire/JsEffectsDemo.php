<?php

namespace App\Livewire;

use Livewire\Component;

class JsEffectsDemo extends Component
{
    public $count = 0;
    public $message = '';

    public function mount()
    {
        // لود از localStorage اگر وجود داشت
        $this->dispatch('load-count');
    }

    public function increment()
    {
        $this->count++;
        $this->dispatch('save-count', count: $this->count);
        $this->dispatch('show-toast', message: 'شمارنده افزایش یافت!');
    }

    public function showAlert()
    {
        $this->dispatch('custom-alert', text: 'این یک alert سفارشی از لایووایر است!');
    }

    public function render()
    {
        return view('livewire.js-effects-demo');
    }
}