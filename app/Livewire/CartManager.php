<?php

namespace App\Livewire;

use Livewire\Component;

class CartManager extends Component
{
    public $cart = [];

    public function mount()
    {
        // شبیه‌سازی سبد خرید اولیه
        $this->cart = [
            ['id' => 1, 'name' => 'لپ‌تاپ گیمینگ', 'price' => 45000000, 'quantity' => 1],
            ['id' => 2, 'name' => 'ماوس بی‌سیم', 'price' => 1500000, 'quantity' => 2],
            ['id' => 3, 'name' => 'کیبورد مکانیکی', 'price' => 3500000, 'quantity' => 1],
        ];
    }

    public function updateQuantity($index, $quantity)
    {
        if ($quantity < 1) $quantity = 1;

        $this->cart[$index]['quantity'] = $quantity;

        // شبیه‌سازی تأخیر سرور
        usleep(600000); // 0.6 ثانیه

        // اینجا در پروژه واقعی در دیتابیس یا session ذخیره می‌شود
    }

    public function removeItem($index)
    {
        unset($this->cart[$index]);
        $this->cart = array_values($this->cart);

        usleep(400000);
    }

    public function getTotalProperty()
    {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function render()
    {
        return view('livewire.cart-manager');
    }
}