<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-pink-600 to-rose-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->js() در عمل</h2>
            <p class="text-2xl text-pink-100">اجرای جاوااسکریپت از PHP</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <div class="space-x-8">
                <button wire:click="showAlert"
                        class="px-12 py-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition">
                    نمایش Alert سفارشی
                </button>

                <button wire:click="changeColor"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    تغییر رنگ پس‌زمینه
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه‌ها کلیک کنید → جاوااسکریپت مستقیماً از PHP اجرا می‌شود.<br>
                می‌توانید هر کد JS دلخواهی بنویسید!
            </p>
        </div>
    </div>
</div>