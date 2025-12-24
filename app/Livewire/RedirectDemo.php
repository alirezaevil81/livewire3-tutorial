<?php

namespace App\Livewire;

use Livewire\Component;

class RedirectDemo extends Component
{
    public $status = 'هنوز ریدایرکتی انجام نشده';

    public function goToDashboard()
    {
        $this->status = 'در حال انتقال به داشبورد...';
        $this->redirect('/dashboard-demo'); // ریدایرکت به URL مستقیم
    }

    public function goToProfile()
    {
        $this->redirectRoute('profile'); // ریدایرکت به route name
    }

    public function render()
    {
        return view('livewire.redirect-demo');
    }
}