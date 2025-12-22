<?php

namespace App\Livewire;

use Livewire\Component;

class ProductModal extends Component
{
    public $isOpen = false;

    public $product = [
        'title' => 'محصول نمونه',
        'description' => 'این یک توضیح کامل برای محصول است. می‌توانید اینجا جزئیات بیشتری بنویسید تا کاربر بهتر تصمیم بگیرد.',
        'price' => '۲۹۹,۰۰۰ تومان',
        'image' => 'https://via.placeholder.com/600x400?text=تصویر+محصول', // تصویر placeholder برای تست
    ];

    public function open()
    {
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.product-modal');
    }
}