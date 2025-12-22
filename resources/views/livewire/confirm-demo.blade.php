<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-red-600 to-pink-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:confirm در عمل</h2>
            <p class="text-2xl text-red-100">تأیید قبل از اجرای عملیات</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <!-- دکمه با تأیید -->
            <button wire:click="deleteItem"
                    wire:confirm="مطمئن هستید که می‌خواهید این آیتم را حذف کنید؟"
                    class="px-12 py-6 bg-gradient-to-r from-red-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-red-700 hover:to-pink-700 transition">
                حذف آیتم (با تأیید)
            </button>

            <!-- دکمه بدون تأیید -->
            <button wire:click="resetStatus"
                    class="px-12 py-6 bg-gradient-to-r from-gray-600 to-gray-800 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-gray-700 hover:to-gray-900 transition">
                ریست وضعیت (بدون تأیید)
            </button>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه قرمز کلیک کنید → یک پیام تأیید ظاهر می‌شود.<br>
                اگر "OK" بزنید → عملیات انجام می‌شود، اگر "Cancel" → هیچ اتفاقی نمی‌افتد.
            </p>
        </div>
    </div>
</div>