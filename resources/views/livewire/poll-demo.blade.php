<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:poll در عمل</h2>
            <p class="text-2xl text-purple-100">آپدیت خودکار زمان هر ۲ ثانیه</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-6xl font-extrabold text-gray-800">
                زمان فعلی سرور: {{ $time }}
            </p>

            <p class="text-xl text-gray-600">
                این زمان هر ۲ ثانیه یک بار به صورت خودکار آپدیت می‌شود.<br>
                نیازی به کلیک یا رفرش نیست!
            </p>
        </div>
    </div>

    <!-- poll هر ۲ ثانیه روی متد refreshTime -->
    <div wire:poll.2s="refreshTime"></div>
</div>