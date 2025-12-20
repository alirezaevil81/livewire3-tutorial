<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $title = '';
    public $body = '';

    protected $rules = [
        'title' => 'required|min:3',
        'body' => 'required|min:10',
    ];

    public function save()
    {
        $this->validate();

        // شبیه‌سازی ذخیره پست (در پروژه واقعی در دیتابیس ذخیره کنید)
        // مثلاً: Post::create(['title' => $this->title, 'body' => $this->body]);

        $this->dispatch('post-created'); // dispatch event بدون داده اضافی

        $this->reset(['title', 'body']); // فرم را پاک می‌کند
        session()->flash('success', 'پست با موفقیت ایجاد شد!');
    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
