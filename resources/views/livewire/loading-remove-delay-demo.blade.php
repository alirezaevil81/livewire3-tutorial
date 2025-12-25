<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-linear-to-r from-blue-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:loading.remove.delay در عمل</h2>
            <p class="text-2xl text-blue-100">مخفی کردن با تأخیر</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <!-- متن پیش‌فرض که با تأخیر مخفی می‌شود -->
            <p wire:loading.remove.delay.700ms class="text-2xl text-gray-600">
                آماده برای شروع عملیات...
            </p>

            <!-- لودینگ که با تأخیر ظاهر می‌شود -->
            <div wire:loading.delay.700ms class="text-4xl text-blue-600 animate-pulse">
                در حال پردازش...
            </div>

            <div class="space-x-8">
                <button wire:click="quickTask"
                        class="px-12 py-6 bg-linear-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl transition">
                    عملیات سریع (۰.۴ ثانیه)
                </button>

                <button wire:click="slowTask"
                        class="px-12 py-6 bg-linear-to-r from-orange-600 to-red-600 text-white text-2xl font-bold rounded-full shadow-2xl transition">
                    عملیات کند (۲ ثانیه)
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                عملیات سریع → لودینگ نشان داده نمی‌شود (چون کمتر از ۷۰۰ms است).<br>
                عملیات کند → بعد از ۷۰۰ms متن "آماده..." مخفی و لودینگ ظاهر می‌شود.
            </p>
        </div>
    </div>
</div>