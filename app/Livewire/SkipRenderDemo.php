<?php

namespace App\Livewire;

use Livewire\Component;

class SkipRenderDemo extends Component
{
    public $count = 0;
    public $log = '';

    public function increment()
    {
        $this->count++;
        // اینجا skipRender نکن! چون کاربر باید تغییر شمارنده را ببیند
    }

    public function decrement()
    {
        $this->count--;
    }

    public function logAction()
    {
        $this->log = 'عملیات در پس‌زمینه ثبت شد (تاریخ: ' . now() . ')';
        $this->skipRender(); // اینجا مجاز است – چون UI نیازی به آپدیت ندارد
    }

    public function render()
    {
        return view('livewire.skip-render-demo');
    }
}