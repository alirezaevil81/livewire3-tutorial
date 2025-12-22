<?php

namespace App\Livewire;

use Livewire\Component;

class TodoItem extends Component
{
    public $todo; // prop برای دریافت تودو

    public function toggle()
    {
        $this->todo['completed'] = !$this->todo['completed'];
        $this->dispatch('todo-updated');
    }

    public function remove()
    {
        $this->dispatch('todo-removed', todoId: $this->todo['id']);
    }

    public function render()
    {
        return view('livewire.todo-item');
    }
}