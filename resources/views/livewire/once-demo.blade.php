<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-pink-600 to-rose-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:once در عمل</h2>
            <p class="text-2xl text-pink-100">اجرای عملیات فقط یک بار</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $message }}</p>

            <!-- دکمه با wire:once -->
            <button wire:click.once="doSomething"
                    class="px-12 py-6 bg-gradient-to-r from-pink-600 to-rose-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-pink-700 hover:to-rose-700 transition">
                کلیک کن (فقط یک بار کار می‌کند!)
            </button>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه کلیک کنید → پیام تغییر می‌کند.<br>
                دوباره کلیک کنید → هیچ اتفاقی نمی‌افتد (چون wire:once فقط یک بار اجازه می‌دهد).
            </p>
        </div>
    </div>
</div>