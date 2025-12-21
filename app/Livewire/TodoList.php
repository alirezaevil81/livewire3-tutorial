<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class TodoList extends Component
{

    public $filter = 'all'; // all, completed, pending

    // داده‌های شبیه‌سازی‌شده (در پروژه واقعی از مدل Eloquent استفاده کنید)
    public $todos = [
        ['id' => 1, 'title' => 'یادگیری لایووایر', 'completed' => true],
        ['id' => 2, 'title' => 'ساخت پروژه تودو', 'completed' => false],
        ['id' => 3, 'title' => 'تست computed properties', 'completed' => true],
        ['id' => 4, 'title' => 'کامیت در گیت‌هاب', 'completed' => false],
        ['id' => 5, 'title' => 'جشن گرفتن پیشرفت', 'completed' => false],
    ];

    #[Computed]
    public function filteredTodos()
    {
        return match ($this->filter) {
            'completed' => collect($this->todos)->where('completed', true),
            'pending'   => collect($this->todos)->where('completed', false),
            default     => collect($this->todos),
        };
    }

    #[Computed]
    public function completedCount()
    {
        return collect($this->todos)->where('completed', true)->count();
    }

    #[Computed]
    public function pendingCount()
    {
        return collect($this->todos)->where('completed', false)->count();
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
