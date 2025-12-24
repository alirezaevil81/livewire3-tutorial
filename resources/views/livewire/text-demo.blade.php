<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:text در عمل</h2>
            <p class="text-2xl text-indigo-100">به‌روزرسانی فقط متن</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <!-- متن با wire:text -->
            <p wire:text="text" class="text-4xl font-bold text-gray-800">
                متن اولیه
            </p>

            <button wire:click="changeText"
                    class="px-12 py-6 bg-gradient-to-r from-indigo-600 to-blue-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-indigo-700 hover:to-blue-700 transition">
                تغییر متن
            </button>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه کلیک کنید → فقط متن داخل p تغییر می‌کند.<br>
                بقیه صفحه (حتی استایل‌ها) دوباره رندر نمی‌شود – خیلی سریع!
            </p>
        </div>
    </div>
</div>