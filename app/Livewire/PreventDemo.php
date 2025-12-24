<?php

namespace App\Livewire;

use Livewire\Component;

class PreventDemo extends Component
{
    public $result = 'هنوز فرمی سابمیت نشده';

    public function submitForm()
    {
        $this->result = 'فرم با موفقیت سابمیت شد (بدون رفرش صفحه)!';
    }

    public function render()
    {
        return view('livewire.prevent-demo');
    }
}