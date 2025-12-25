<?php

namespace App\Livewire;

use Livewire\Component;

class LoadingRemoveDelayDemo extends Component
{
    public $status = 'آماده';

    public function quickTask()
    {
        usleep(400000); // ۰.۴ ثانیه – کمتر از delay
        $this->status = 'عملیات سریع انجام شد';
    }

    public function slowTask()
    {
        sleep(2); // ۲ ثانیه – بیشتر از delay
        $this->status = 'عملیات کند انجام شد';
    }

    public function render()
    {
        return view('livewire.loading-remove-delay-demo');
    }
}