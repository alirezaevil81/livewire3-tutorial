<?php

namespace App\Livewire;

use Livewire\Component;

class OfflineDemo extends Component
{
    public $content = '';

    public function save()
    {
        // شبیه‌سازی ذخیره (در پروژه واقعی در دیتابیس ذخیره کنید)
        session()->flash('success', 'محتوا با موفقیت ذخیره شد!');
    }

    public function render()
    {
        return view('livewire.offline-demo');
    }
}