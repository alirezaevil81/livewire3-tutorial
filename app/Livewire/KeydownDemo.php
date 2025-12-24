<?php

namespace App\Livewire;

use Livewire\Component;

class KeydownDemo extends Component
{
    public $search = '';
    public $message = 'هنوز کلیدی فشار داده نشده';

    public function searchOnEnter()
    {
        $this->message = 'جستجو با Enter انجام شد! عبارت: ' . $this->search;
    }

    public function nextItem()
    {
        $this->message = 'با ArrowDown به آیتم بعدی رفتید!';
    }

    public function render()
    {
        return view('livewire.keydown-demo');
    }
}