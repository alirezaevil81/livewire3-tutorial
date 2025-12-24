<?php

namespace App\Livewire;

use Livewire\Component;

class SubmitDemo extends Component
{
    public $email = '';
    public $message = 'فرم هنوز سابمیت نشده';

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $this->message = 'فرم سابمیت شد! ایمیل: ' . $this->email;
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.submit-demo');
    }
}