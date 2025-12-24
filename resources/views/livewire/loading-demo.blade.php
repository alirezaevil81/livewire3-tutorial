<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:loading در عمل</h2>
            <p class="text-2xl text-blue-100">نمایش حالت لودینگ هنگام درخواست</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $result }}</p>

            <!-- پیام لودینگ -->
            <div wire:loading wire:target="process" class="text-4xl text-blue-600 animate-pulse">
                در حال پردازش... لطفاً صبر کنید
            </div>

            <!-- دکمه غیرفعال در زمان لودینگ -->
            <button wire:click="process"
                    wire:loading.attr="disabled"
                    class="px-12 py-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition disabled:opacity-50 disabled:cursor-not-allowed">
                <span wire:loading.remove wire:target="process">شروع پردازش (۳ ثانیه)</span>
                <span wire:loading wire:target="process">در حال پردازش...</span>
            </button>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه کلیک کنید → ۳ ثانیه صبر کنید.<br>
                در این مدت پیام لودینگ ظاهر می‌شود و دکمه غیرفعال است.
            </p>
        </div>
    </div>
</div>