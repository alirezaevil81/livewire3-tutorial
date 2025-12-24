<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->reset() در عمل</h2>
            <p class="text-2xl text-teal-100">ریست کردن پراپرتی‌ها بعد از عملیات</p>
        </div>

        <div class="p-10 space-y-10">
            <!-- فرم -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <input type="text" wire:model="name"
                       placeholder="نام"
                       class="px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 transition shadow-inner">

                <input type="email" wire:model="email"
                       placeholder="ایمیل"
                       class="px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 transition shadow-inner">

                <input type="text" wire:model="message"
                       placeholder="پیام"
                       class="px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 transition shadow-inner">
            </div>

            <div class="text-center space-x-8">
                <button wire:click="submitAllReset"
                        class="px-12 py-6 bg-gradient-to-r from-red-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-red-700 hover:to-pink-700 transition">
                    سابمیت و پاک کردن همه
                </button>

                <button wire:click="submitKeepName"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    سابمیت و نگه داشتن نام
                </button>
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                فیلدها را پر کنید و یکی از دکمه‌ها را بزنید.<br>
                دکمه قرمز → همه فیلدها پاک می‌شوند.<br>
                دکمه سبز → فقط نام نگه داشته می‌شود.
            </p>
        </div>
    </div>
</div>