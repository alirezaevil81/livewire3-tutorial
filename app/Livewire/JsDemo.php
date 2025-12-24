<?php

namespace App\Livewire;

use Livewire\Component;

class JsDemo extends Component
{
    public $status = 'هنوز JS اجرا نشده';

    public function showAlert()
    {
        $this->js("alert('سلام! این alert از سمت سرور لایووایر آمد 😎')");
        $this->status = 'alert نمایش داده شد';
    }

    public function changeColor()
    {
        $this->js("document.body.style.backgroundColor = '#f0f9ff'");
        $this->status = 'رنگ پس‌زمینه تغییر کرد';
    }

    public function render()
    {
        return view('livewire.js-demo');
    }
}