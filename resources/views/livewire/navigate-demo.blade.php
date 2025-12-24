<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:navigate در عمل</h2>
            <p class="text-2xl text-green-100">ناوبری سریع بدون رفرش کامل صفحه</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">
                شما در صفحه: <span class="text-green-600">{{ $page }}</span> هستید
            </p>

            <!-- لینک‌ها با wire:navigate -->
            <div class="space-x-8">
                <a href="/navigate-demo" wire:navigate
                   class="px-10 py-5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition inline-block">
                    خانه
                </a>

                <a href="/navigate-demo?page=about" wire:navigate
                   class="px-10 py-5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-pink-700 transition inline-block">
                    درباره ما
                </a>

                <a href="/navigate-demo?page=contact" wire:navigate
                   class="px-10 py-5 bg-gradient-to-r from-orange-600 to-red-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-orange-700 hover:to-red-700 transition inline-block">
                    تماس
                </a>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی لینک‌ها کلیک کنید → صفحه تغییر می‌کند اما مرورگر کامل رفرش نمی‌شود (سریع و روان).<br>
                URL هم تغییر می‌کند، اما بدون فلش سفید!
            </p>
        </div>
    </div>
</div>