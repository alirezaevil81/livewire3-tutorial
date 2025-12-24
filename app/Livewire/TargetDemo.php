<?php

namespace App\Livewire;

use Livewire\Component;

class TargetDemo extends Component
{
    public $status1 = 'عملیات ۱ انجام نشده';
    public $status2 = 'عملیات ۲ انجام نشده';

    public function task1()
    {
        sleep(2); // ۲ ثانیه تأخیر
        $this->status1 = 'عملیات ۱ با موفقیت انجام شد!';
    }

    public function task2()
    {
        sleep(4); // ۴ ثانیه تأخیر
        $this->status2 = 'عملیات ۲ با موفقیت انجام شد!';
    }

    public function render()
    {
        return view('livewire.target-demo');
    }
}