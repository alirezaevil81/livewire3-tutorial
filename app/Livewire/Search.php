<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $query = '';

    public $items = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry', 'Fig', 'Grape'];

    public function render()
    {
        $filteredItems = collect($this->items)->filter(function ($item) {
            return str_contains(strtolower($item), strtolower($this->query));
        });

        return view('livewire.search', [
            'filteredItems' => $filteredItems,
        ]);
    }
}
