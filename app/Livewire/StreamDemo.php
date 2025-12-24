<?php

namespace App\Livewire;

use Livewire\Component;

class StreamDemo extends Component
{
    public function generate()
    {
        $text = "سلام! من متن را به صورت زنده و با استفاده از قابلیت استریم در لایووایر ۳ برای شما نمایش می‌دهم. این قابلیت تجربه کاربری فوق‌العاده‌ای ایجاد می‌کند.";

        // تقسیم متن به کلمات برای شبیه‌سازی استریم
        $words = explode(' ', $text);

        foreach ($words as $word) {
            // ارسال تکه متن به المنت با آی‌دی 'output'
            $this->stream(to: 'output', content: $word . ' ', replace: false);

            // ایجاد یک وقفه کوتاه برای مشاهده افکت استریم
            usleep(100000);
        }
    }



    public function render()
    {
        return view('livewire.stream-demo');
    }
}