<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class UrlSyncDemo extends Component
{
    #[Url]
    public $search = '';

    #[Url]
    public $category = 'all';

    #[Url]
    public $sort = 'newest';

    public function render()
    {
        return view('livewire.url-sync-demo');
    }
}