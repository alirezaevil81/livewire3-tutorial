<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class PostList extends Component
{

    public $posts = [];

    public function mount()
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        // شبیه‌سازی داده‌ها (در پروژه واقعی از دیتابیس استفاده کنید)
        $this->posts = [
            ['id' => 1, 'title' => 'پست اول', 'body' => 'محتوای پست اول...'],
            ['id' => 2, 'title' => 'پست دوم', 'body' => 'محتوای پست دوم...'],
        ];
    }

    #[On('post-created')]

    public function refreshPosts()
    {
        $this->loadPosts(); // لیست را دوباره لود می‌کند
        session()->flash('message', 'پست جدید اضافه شد و لیست آپدیت شد!');
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
