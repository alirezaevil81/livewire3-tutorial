<?php

namespace App\Livewire;

use Livewire\Component;

class LoadingClassDemo extends Component
{
    public $status = 'آماده';

    public function startTask()
    {
        sleep(3); // ۳ ثانیه تأخیر
        $this->status = 'عملیات با موفقیت انجام شد!';
    }

    public function render()
    {
        return view('livewire.loading-class-demo');
    }
}