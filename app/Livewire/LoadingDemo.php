<?php

namespace App\Livewire;

use Livewire\Component;

class LoadingDemo extends Component
{
    public $result = 'هنوز چیزی پردازش نشده';

    public function process()
    {
        // تأخیر مصنوعی برای تست لودینگ
        sleep(3);

        $this->result = 'پردازش با موفقیت انجام شد!';
    }

    public function render()
    {
        return view('livewire.loading-demo');
    }
}