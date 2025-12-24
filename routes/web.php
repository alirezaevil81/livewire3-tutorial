<?php

use App\Livewire\{AlpineIntegration,
    BlurDemo,
    BrowserDispatchDemo,
    CartManager,
    Clock,
    ConfirmDemo,
    Counter,
    CurrentDemo,
    DebounceDemo,
    DirtyDemo,
    IgnoreDemo,
    InitDemo,
    JsDemo,
    JsEffectsDemo,
    KeyDemo,
    KeydownDemo,
    LazyDashboard,
    LoadingClassDemo,
    LoadingDemo,
    LockedDemo,
    NavigateDemo,
    NavigateHoverDemo,
    OfflineDemo,
    OnceDemo,
    PollDemo,
    PreventDemo,
    ProductModal,
    RedirectDemo,
    RegisterForm,
    ReplaceDemo,
    ResetDemo,
    SavePost,
    Search,
    SessionDemo,
    SkipRenderDemo,
    SnapshotDemo,
    StreamDemo,
    SubmitDemo,
    TargetDemo,
    TextDemo,
    TodoList,
    TodoManager,
    TransitionDemo,
    UploadAvatar,
    UrlSyncDemo,
    UserList};
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

Route::get('/target-demo', TargetDemo::class);

Route::get('/navigate-hover-demo', NavigateHoverDemo::class);

Route::get('/dirty-demo', DirtyDemo::class);

Route::get('/snapshot-demo', SnapshotDemo::class);

Route::get('/text-demo', TextDemo::class);

Route::get('/current-demo', CurrentDemo::class);

Route::get('/stream-demo', StreamDemo::class);

Route::get('/redirect-demo', RedirectDemo::class);

Route::get('/dashboard-demo', function () {
    return '<h1 class="text-center text-5xl mt-20">خوش آمدید به داشبورد!</h1>';
});

Route::get('/profile', function () {
    return '<h1 class="text-center text-5xl mt-20">این صفحه پروفایل است</h1>';
})->name('profile');

Route::get('/reset-demo', ResetDemo::class);

Route::get('/keydown-demo', KeydownDemo::class);

Route::get('/js-demo', JsDemo::class);

Route::get('/browser-dispatch-demo', BrowserDispatchDemo::class);

Route::get('/blur-demo', BlurDemo::class);

Route::get('/loading-class-demo', LoadingClassDemo::class);

Route::get('/once-demo', OnceDemo::class);

Route::get('/debounce-demo', DebounceDemo::class);

Route::get('/url-sync-demo', UrlSyncDemo::class);

Route::get('/locked-demo', LockedDemo::class);

Route::get('/session-demo', SessionDemo::class);

Route::get('/skip-render-demo', SkipRenderDemo::class);

Route::get('/replace-demo', ReplaceDemo::class);