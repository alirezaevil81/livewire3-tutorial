<?php

namespace App\Livewire;

use Livewire\Component;

class TransitionDemo extends Component
{
    public $items = ['آیتم اول', 'آیتم دوم'];
    public $newItem = '';
    public $showCard = false;
    public $toggle = false;

    public function addItem()
    {
        if (trim($this->newItem) !== '') {
            $this->items[] = $this->newItem;
            $this->newItem = '';
        }
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items); // re-index
    }

    public function render()
    {
        return view('livewire.transition-demo');
    }
}