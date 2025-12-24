<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">#[Session] در عمل</h2>
            <p class="text-2xl text-indigo-100">حفظ وضعیت در session</p>
        </div>

        <div class="p-10 space-y-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- تم -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-3">تم</label>
                    <select wire:model.live="theme"
                            class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-indigo-400 transition shadow-inner">
                        <option value="light">روشن</option>
                        <option value="dark">تیره</option>
                        <option value="auto">اتوماتیک</option>
                    </select>
                </div>

                <!-- زبان -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-3">زبان</label>
                    <select wire:model.live="language"
                            class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-indigo-400 transition shadow-inner">
                        <option value="fa">فارسی</option>
                        <option value="en">English</option>
                        <option value="ar">العربية</option>
                    </select>
                </div>

                <!-- نوتیفیکیشن -->
                <div class="flex items-center justify-center">
                    <label class="inline-flex items-center text-2xl cursor-pointer">
                        <input type="checkbox" wire:model.live="notifications"
                               class="w-10 h-10 text-indigo-600 rounded focus:ring-indigo-500">
                        <span class="mr-6">نوتیفیکیشن فعال</span>
                    </label>
                </div>
            </div>

            <div class="text-center">
                <p class="text-2xl font-bold text-gray-800">
                    تم: {{ $theme }} | زبان: {{ $language }} | نوتیفیکیشن: {{ $notifications ? 'فعال' : 'غیرفعال' }}
                </p>
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                تنظیمات را تغییر دهید → صفحه را رفرش کنید یا تب را ببندید و دوباره باز کنید.<br>
                همه چیز دقیقاً حفظ می‌شود (به خاطر #[Session])!
            </p>
        </div>
    </div>
</div>