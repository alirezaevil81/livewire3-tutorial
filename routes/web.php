<?php

use App\Livewire\AlpineIntegration;
use App\Livewire\CartManager;
use App\Livewire\Clock;
use App\Livewire\ConfirmDemo;
use App\Livewire\Counter;
use App\Livewire\IgnoreDemo;
use App\Livewire\InitDemo;
use App\Livewire\JsEffectsDemo;
use App\Livewire\KeyDemo;
use App\Livewire\LazyDashboard;
use App\Livewire\LoadingDemo;
use App\Livewire\NavigateDemo;
use App\Livewire\OfflineDemo;
use App\Livewire\PollDemo;
use App\Livewire\PreventDemo;
use App\Livewire\ProductModal;
use App\Livewire\RegisterForm;
use App\Livewire\SavePost;
use App\Livewire\Search;
use App\Livewire\SubmitDemo;
use App\Livewire\TodoList;
use App\Livewire\TodoManager;
use App\Livewire\TransitionDemo;
use App\Livewire\UploadAvatar;
use App\Livewire\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/search', Search::class);

Route::get('/save-post', SavePost::class);

Route::get('/clock', Clock::class);

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/todos', TodoList::class);

Route::get('/upload-avatar', UploadAvatar::class);

Route::get('/users', UserList::class);

Route::get('/todos-nested', TodoManager::class);

Route::get('/offline-demo', OfflineDemo::class);

Route::get('/alpine-integration', AlpineIntegration::class);

Route::get('/lazy-dashboard', LazyDashboard::class);

Route::get('/product-modal', ProductModal::class);

Route::get('/transitions', TransitionDemo::class);

Route::get('/init-demo', InitDemo::class);

Route::get('/register', RegisterForm::class);

Route::get('/cart', CartManager::class);

Route::get('/js-effects', JsEffectsDemo::class);

Route::get('/ignore-demo', IgnoreDemo::class);

Route::get('/confirm-demo', ConfirmDemo::class);

Route::get('/poll-demo', PollDemo::class);

Route::get('/loading-demo', LoadingDemo::class);

Route::get('/navigate-demo', NavigateDemo::class);

Route::get('/prevent-demo', PreventDemo::class);

Route::get('/submit-demo', SubmitDemo::class);

Route::get('/key-demo', KeyDemo::class);