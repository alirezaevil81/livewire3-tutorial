<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class TodoManager extends Component
{
    public $todos = [];
    public $newTitle = '';

    public function mount()
    {
        $this->todos = [
            ['id' => 1, 'title' => 'یادگیری Nesting در لایووایر', 'completed' => false],
            ['id' => 2, 'title' => 'ساخت کامپوننت فرزند', 'completed' => true],
            ['id' => 3, 'title' => 'استفاده از wire:key', 'completed' => false],
        ];
    }

    public function add()
    {
        if (trim($this->newTitle) !== '') {
            $this->todos[] = [
                'id' => count($this->todos) + 1,
                'title' => $this->newTitle,
                'completed' => false,
            ];
            $this->newTitle = '';
        }
    }

    #[On('todo-updated')]
    public function refreshList()
    {
        // فقط برای refresh ویو (در صورت نیاز)
    }

    #[On('todo-removed')]
    public function remove($todoId)
    {
        $this->todos = array_filter($this->todos, fn($todo) => $todo['id'] !== $todoId);
    }

    public function render()
    {
        return view('livewire.todo-manager');
    }
}