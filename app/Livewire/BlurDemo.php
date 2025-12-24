<?php

namespace App\Livewire;

use Livewire\Component;

class BlurDemo extends Component
{
    public $username = '';
    public $message = 'هنوز چیزی وارد نشده';

    public function updatedUsername()
    {
        $this->message = "نام کاربری آپدیت شد: {$this->username}";
    }

    public function render()
    {
        return view('livewire.blur-demo');
    }
}