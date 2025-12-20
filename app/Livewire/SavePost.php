<?php

namespace App\Livewire;

use Livewire\Component;

class SavePost extends Component
{
    public $title = '';
    public function save()
    {
        // تأخیر مصنوعی برای شبیه‌سازی درخواست طولانی
        sleep(2);

        // اینجا می‌توانید منطق واقعی ذخیره را بنویسید، مثلاً ذخیره در دیتابیس
        // برای این تسک فقط پیام موفقیت شبیه‌سازی می‌کنیم
        session()->flash('message', 'پست با موفقیت ذخیره شد!');
    }
    public function render()
    {
        return view('livewire.save-post');
    }
}
