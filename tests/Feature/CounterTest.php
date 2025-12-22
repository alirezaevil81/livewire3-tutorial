<?php

use App\Livewire\Counter;

it('رندر شدن کامپوننت Counter', function () {
    Livewire::test(Counter::class)
        ->assertSee('0')
        ->assertSee('+')
        ->assertSee('-');
});

it('افزایش شمارنده با فراخوانی متد increment', function () {
    Livewire::test(Counter::class)
        ->assertSee('0')
        ->call('increment')  // این راه درست است
        ->assertSee('1');
});

it('کاهش شمارنده با فراخوانی متد decrement', function () {
    Livewire::test(Counter::class)
        ->set('count', 5)
        ->call('decrement')
        ->assertSee('4');
});

it('افزایش و کاهش چندباره شمارنده', function () {
    Livewire::test(Counter::class)
        ->assertSee('0')
        ->call('increment')
        ->assertSee('1')
        ->call('increment')
        ->assertSee('2')
        ->call('decrement')
        ->assertSee('1');
});