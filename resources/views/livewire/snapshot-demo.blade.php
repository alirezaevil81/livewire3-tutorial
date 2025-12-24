<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:snapshot در عمل</h2>
            <p class="text-2xl text-green-100">بهینه‌سازی لیست بزرگ</p>
        </div>

        <div class="p-10 space-y-10">
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-800 mb-6">
                    شمارنده: {{ $counter }}
                </p>

                <button wire:click="increment"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    افزایش شمارنده
                </button>
            </div>

            <!-- لیست بزرگ با wire:snapshot -->
            <div wire:snapshot class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($items as $item)
                    <div class="bg-green-50 p-6 rounded-xl shadow-md text-center text-lg font-semibold text-gray-800">
                        {{ $item }}
                    </div>
                @endforeach
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                روی دکمه افزایش کلیک کنید → شمارنده تغییر می‌کند اما لیست بزرگ دوباره رندر نمی‌شود (به خاطر wire:snapshot).<br>
                صفحه خیلی روان می‌ماند حتی با ۱۰۰ آیتم!
            </p>
        </div>
    </div>
</div>