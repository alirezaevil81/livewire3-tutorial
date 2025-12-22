<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $name = '';
    public $email = '';
    public $age = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|email|unique:users,email', // در پروژه واقعی unique را فعال کنید
        'age' => 'required|numeric|min:18|max:100',
        'password' => 'required|min:8|confirmed',
    ];

    protected $messages = [
        'name.required' => 'نام الزامی است.',
        'name.min' => 'نام باید حداقل ۳ کاراکتر باشد.',
        'name.max' => 'نام نمی‌تواند بیشتر از ۵۰ کاراکتر باشد.',
        'email.required' => 'ایمیل الزامی است.',
        'email.email' => 'فرمت ایمیل صحیح نیست.',
        'email.unique' => 'این ایمیل قبلاً ثبت شده است.',
        'age.required' => 'سن الزامی است.',
        'age.numeric' => 'سن باید عدد باشد.',
        'age.min' => 'سن باید حداقل ۱۸ سال باشد.',
        'age.max' => 'سن نمی‌تواند بیشتر از ۱۰۰ سال باشد.',
        'password.required' => 'رمز عبور الزامی است.',
        'password.min' => 'رمز عبور باید حداقل ۸ کاراکتر باشد.',
        'password.confirmed' => 'تأیید رمز عبور مطابقت ندارد.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();

        // شبیه‌سازی ثبت‌نام موفق
        session()->flash('success', 'ثبت‌نام با موفقیت انجام شد! خوش آمدید ' . $this->name . '!');

        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}