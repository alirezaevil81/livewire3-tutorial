<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:loading.class در عمل</h2>
            <p class="text-2xl text-indigo-100">تغییر کلاس در زمان لودینگ</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <!-- دکمه با تغییر کلاس در لودینگ -->
            <button wire:click="startTask"
                    wire:loading.class="bg-gray-500 cursor-not-allowed"
                    wire:loading.class.remove="bg-indigo-600 hover:bg-indigo-700"
                    class="px-12 py-6 bg-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:bg-indigo-700 transition">
                <span wire:loading.remove wire:target="startTask">شروع عملیات (۳ ثانیه)</span>
                <span wire:loading wire:target="startTask">در حال پردازش...</span>
            </button>

            <!-- spinner با کلاس -->
            <div wire:loading wire:target="startTask"
                 wire:loading.class="block"
                 wire:loading.class.remove="hidden"
                 class="hidden">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-indigo-600"></div>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه کلیک کنید → رنگ دکمه تغییر می‌کند و spinner ظاهر می‌شود.<br>
                بعد از ۳ ثانیه همه چیز به حالت عادی برمی‌گردد.
            </p>
        </div>
    </div>
</div>