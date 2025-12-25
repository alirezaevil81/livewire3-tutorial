<?php

namespace App\Livewire\Directives;

use Livewire\Livewire;

class DoubleClick
{
    public function handle($target)
    {
        return <<<JS
        let timeout;
        $el.addEventListener('click', () => {
            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
                $wire.call('$target');
            } else {
                timeout = setTimeout(() => {
                    timeout = null;
                }, 300);
            }
        });
        JS;
    }
}