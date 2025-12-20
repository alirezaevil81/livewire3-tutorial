<?php

use App\Livewire\Clock;
use App\Livewire\Counter;
use App\Livewire\SavePost;
use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/search', Search::class);

Route::get('/save-post', SavePost::class);

Route::get('/clock', Clock::class);