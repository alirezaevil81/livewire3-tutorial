<?php

namespace App\Livewire;

use Livewire\Component;

class KeyDemo extends Component
{
    public $items = [
        ['id' => 1, 'name' => 'آیتم اول'],
        ['id' => 2, 'name' => 'آیتم دوم'],
        ['id' => 3, 'name' => 'آیتم سوم'],
    ];

    public $newName = '';

    public function add()
    {
        if (trim($this->newName) !== '') {
            $this->items[] = [
                'id' => count($this->items) + 1,
                'name' => $this->newName,
            ];
            $this->newName = '';
        }
    }

    public function remove($id)
    {
        $this->items = array_filter($this->items, fn($item) => $item['id'] !== $id);
        $this->items = array_values($this->items);
    }

    public function render()
    {
        return view('livewire.key-demo');
    }
}