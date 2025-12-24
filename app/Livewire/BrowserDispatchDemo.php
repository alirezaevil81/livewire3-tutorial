<?php

namespace App\Livewire;

use Livewire\Component;

class BrowserDispatchDemo extends Component
{
    public $status = 'هنوز eventی ارسال نشده';

    public function sendToast()
    {
        $this->dispatch('toast', message: 'عملیات با موفقیت انجام شد! 🎉');
        $this->status = 'event toast ارسال شد';
    }

    public function changeTitle()
    {
        $this->dispatch('change-title', newTitle: 'عنوان جدید از سرور!');
        $this->status = 'event change-title ارسال شد';
    }

    public function render()
    {
        return view('livewire.browser-dispatch-demo');
    }
}