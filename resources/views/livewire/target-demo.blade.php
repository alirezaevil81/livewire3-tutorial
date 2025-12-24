<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-amber-600 to-orange-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:target در عمل</h2>
            <p class="text-2xl text-amber-100">لودینگ فقط برای دکمه خاص</p>
        </div>

        <div class="p-10 text-center space-y-12">
            <div>
                <p class="text-2xl font-bold text-gray-800 mb-6">{{ $status1 }}</p>

                <button wire:click="task1"
                        wire:loading.attr="disabled" wire:target="task1"
                        class="px-12 py-6 bg-gradient-to-r from-amber-600 to-orange-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-amber-700 hover:to-orange-700 transition disabled:opacity-50">
                    <span wire:loading.remove wire:target="task1">شروع عملیات ۱ (۲ ثانیه)</span>
                    <span wire:loading wire:target="task1">در حال پردازش عملیات ۱...</span>
                </button>
            </div>

            <div>
                <p class="text-2xl font-bold text-gray-800 mb-6">{{ $status2 }}</p>

                <button wire:click="task2"
                        wire:loading.attr="disabled" wire:target="task2"
                        class="px-12 py-6 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-indigo-700 hover:to-purple-700 transition disabled:opacity-50">
                    <span wire:loading.remove wire:target="task2">شروع عملیات ۲ (۴ ثانیه)</span>
                    <span wire:loading wire:target="task2">در حال پردازش عملیات ۲...</span>
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی هر دکمه کلیک کنید → فقط همان دکمه لودینگ نشان می‌دهد.<br>
                دکمه دیگر عادی می‌ماند.
            </p>
        </div>
    </div>
</div>