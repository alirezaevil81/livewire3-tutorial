<?php

namespace App\Livewire;

use Livewire\Component;

class ConfirmDemo extends Component
{
    public $status = 'هنوز عملیاتی انجام نشده';

    public function deleteItem()
    {
        $this->status = 'آیتم با موفقیت حذف شد!';
    }

    public function resetStatus()
    {
        $this->status = 'هنوز عملیاتی انجام نشده';
    }

    public function render()
    {
        return view('livewire.confirm-demo');
    }
}