<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:navigate.hover در عمل</h2>
            <p class="text-2xl text-purple-100">پیش‌لود صفحات هنگام hover</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <!-- لینک‌ها با wire:navigate.hover -->
            <div class="space-x-8">
                <a href="/navigate-hover-demo" wire:navigate.hover
                   class="px-10 py-5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition inline-block">
                    خانه (hover کنید تا پیش‌لود شود)
                </a>

                <a href="/navigate-hover-demo?section=about" wire:navigate.hover
                   class="px-10 py-5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-pink-700 transition inline-block">
                    درباره ما (hover کنید)
                </a>

                <a href="/navigate-hover-demo?section=contact" wire:navigate.hover
                   class="px-10 py-5 bg-gradient-to-r from-orange-600 to-red-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-orange-700 hover:to-red-700 transition inline-block">
                    تماس (hover کنید)
                </a>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                موس را روی لینک ببرید → صفحه پیش‌لود می‌شود.<br>
                بعد کلیک کنید → خیلی سریع لود می‌شود (بدون تأخیر).
            </p>
        </div>
    </div>
</div>