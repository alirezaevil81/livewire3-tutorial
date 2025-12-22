<?php

namespace App\Livewire;

use Livewire\Component;

class AlpineIntegration extends Component
{
    public $selectedColor = 'blue'; // مقدار پیش‌فرض

    public $colors = [
        'red'    => 'قرمز',
        'green'  => 'سبز',
        'blue'   => 'آبی',
        'yellow' => 'زرد',
        'purple' => 'بنفش',
        'orange' => 'نارنجی',
    ];

    public function changeColor($color)
    {
        $this->selectedColor = $color;
        session()->flash('message', "رنگ انتخابی شما به {$this->colors[$color]} تغییر کرد!");
    }

    public function render()
    {
        return view('livewire.alpine-integration');
    }
}