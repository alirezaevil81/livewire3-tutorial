<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">یادگیری wire:ignore و wire:ignore.self</h2>
            <p class="text-2xl text-indigo-100">مثال ساده با dropdown سفارشی</p>
        </div>

        <div class="p-10 space-y-12">
            <!-- فیلد برای تست آپدیت لایووایر -->
            <div>
                <label class="block text-xl font-semibold text-gray-700 mb-3">نام خود را وارد کنید (تایپ کنید تا صفحه آپدیت شود)</label>
                <input type="text" wire:model.live="name"
                       placeholder="نام..."
                       class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-indigo-400 transition shadow-inner">
                <p class="mt-4 text-lg text-gray-600">نام فعلی: <strong>{{ $name ?: 'هنوز وارد نشده' }}</strong></p>
            </div>

            <!-- مثال ۱: بدون wire:ignore (مشکل دارد) -->
            <div>
                <h3 class="text-2xl font-bold text-red-600 mb-4">بدون wire:ignore → dropdown بسته می‌شود!</h3>
                <div class="relative inline-block">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                            class="px-8 py-4 bg-red-600 text-white rounded-xl font-bold shadow-lg">
                        باز کردن dropdown (بدون ignore)
                    </button>
                    <div class="absolute mt-2 w-48 bg-white border border-gray-300 rounded-xl shadow-2xl hidden z-10">
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۱</a>
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۲</a>
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۳</a>
                    </div>
                </div>
                <p class="mt-4 text-red-600">وقتی در نام تایپ کنید → dropdown بسته می‌شود (چون لایووایر DOM را دوباره می‌سازد)</p>
            </div>

            <!-- مثال ۲: با wire:ignore (حل شد) -->
            <div>
                <h3 class="text-2xl font-bold text-green-600 mb-4">با wire:ignore → dropdown حفظ می‌شود!</h3>
                <div wire:ignore class="relative inline-block">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                            class="px-8 py-4 bg-green-600 text-white rounded-xl font-bold shadow-lg">
                        باز کردن dropdown (با ignore)
                    </button>
                    <div class="absolute mt-2 w-48 bg-white border border-gray-300 rounded-xl shadow-2xl hidden z-10">
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۱</a>
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۲</a>
                        <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۳</a>
                    </div>
                </div>
                <p class="mt-4 text-green-600">وقتی در نام تایپ کنید → dropdown باز می‌ماند (چون لایووایر این بخش را نادیده می‌گیرد)</p>
            </div>

            <!-- مثال ۳: با wire:ignore.self (فقط داخل نادیده گرفته می‌شود) -->
            <div>
                <h3 class="text-2xl font-bold text-blue-600 mb-4">با wire:ignore.self → فقط داخل حفظ می‌شود</h3>
                <div wire:ignore.self class="p-6 bg-blue-50 rounded-xl">
                    <p class="text-xl font-bold mb-4">این div با ignore.self است</p>
                    <div class="relative inline-block">
                        <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                                class="px-8 py-4 bg-blue-600 text-white rounded-xl font-bold shadow-lg">
                            dropdown با ignore.self
                        </button>
                        <div class="absolute mt-2 w-48 bg-white border border-gray-300 rounded-xl shadow-2xl hidden z-10">
                            <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۱</a>
                            <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۲</a>
                            <a href="#" class="block px-6 py-4 hover:bg-gray-100">گزینه ۳</a>
                        </div>
                    </div>
                </div>
                <p class="mt-4 text-blue-600">دکمه و dropdown داخل ignore.self هستند → حفظ می‌شوند، اما خود div آبی آپدیت می‌شود اگر لازم باشد.</p>
            </div>
        </div>
    </div>
</div>