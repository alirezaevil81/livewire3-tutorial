<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-orange-600 to-red-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:replace در عمل</h2>
            <p class="text-2xl text-orange-100">جایگزینی کامل DOM</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <!-- کارت با wire:replace -->
            <div wire:replace
                 class="p-10 rounded-2xl shadow-lg text-center transition-all duration-500
                        {{ $status === 'initial' ? 'bg-gray-100' : '' }}
                        {{ $status === 'success' ? 'bg-green-100' : '' }}
                        {{ $status === 'error' ? 'bg-red-100' : '' }}">
                <p class="text-4xl font-bold
                   {{ $status === 'initial' ? 'text-gray-800' : '' }}
                   {{ $status === 'success' ? 'text-green-800' : '' }}
                   {{ $status === 'error' ? 'text-red-800' : '' }}">
                    وضعیت فعلی: {{ ucfirst($status) }}
                </p>
            </div>

            <div class="space-x-8">
                <button wire:click="changeToSuccess"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    موفقیت
                </button>

                <button wire:click="changeToError"
                        class="px-12 py-6 bg-gradient-to-r from-red-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-red-700 hover:to-pink-700 transition">
                    خطا
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه‌ها کلیک کنید → کارت کاملاً جایگزین می‌شود (نه morph).<br>
                اگر انیمیشن یا JS داخل کارت باشد، دوباره اجرا می‌شود.
            </p>
        </div>
    </div>
</div>