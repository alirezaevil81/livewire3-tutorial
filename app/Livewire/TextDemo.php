<?php

namespace App\Livewire;

use Livewire\Component;

class TextDemo extends Component
{
    public $text = 'متن اولیه';

    public function changeText()
    {
        $this->text = 'متن جدید – فقط این قسمت آپدیت شد!';
    }

    public function render()
    {
        return view('livewire.text-demo');
    }
}