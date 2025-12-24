<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:current در عمل</h2>
            <p class="text-2xl text-teal-100">هایلایت خودکار لینک صفحه فعلی</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <!-- منوی ناوبری با wire:current -->
            <nav class="flex justify-center gap-8 flex-wrap">
                <a href="/current-demo"
                   wire:navigate
                   wire:current="bg-teal-600 text-white shadow-lg scale-110"
                   class="px-10 py-5 bg-gray-200 text-gray-800 text-2xl font-bold rounded-full transition transform hover:scale-105">
                    صفحه اصلی
                </a>

                <a href="/current-demo?tab=about"
                   wire:navigate
                   wire:current="bg-teal-600 text-white shadow-lg scale-110"
                   class="px-10 py-5 bg-gray-200 text-gray-800 text-2xl font-bold rounded-full transition transform hover:scale-105">
                    درباره ما
                </a>

                <a href="/current-demo?tab=services"
                   wire:navigate
                   wire:current="bg-teal-600 text-white shadow-lg scale-110"
                   class="px-10 py-5 bg-gray-200 text-gray-800 text-2xl font-bold rounded-full transition transform hover:scale-105">
                    خدمات
                </a>

                <a href="/current-demo?tab=contact"
                   wire:navigate
                   wire:current="bg-teal-600 text-white shadow-lg scale-110"
                   class="px-10 py-5 bg-gray-200 text-gray-800 text-2xl font-bold rounded-full transition transform hover:scale-105">
                    تماس با ما
                </a>
            </nav>

            <p class="text-lg text-gray-600 mt-8">
                روی لینک‌ها کلیک کنید → لینک صفحه فعلی به صورت خودکار هایلایت می‌شود.<br>
                بدون نیاز به کد PHP اضافی!
            </p>
        </div>
    </div>
</div>