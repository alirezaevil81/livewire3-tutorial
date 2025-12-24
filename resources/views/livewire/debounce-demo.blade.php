<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-orange-600 to-red-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:debounce در عمل</h2>
            <p class="text-2xl text-orange-100">تأخیر در ارسال درخواست جستجو</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $result }}</p>

            <!-- فیلد با debounce -->
            <input type="text" wire:model.live.debounce.500ms="search"
                   placeholder="چیزی تایپ کنید (۵۰۰ms تأخیر)"
                   class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-orange-400 transition shadow-inner">

            <p class="text-lg text-gray-600 mt-8">
                در فیلد تایپ کنید → بعد از ۵۰۰ میلی‌ثانیه توقف، جستجو انجام می‌شود.<br>
                درخواست‌های اضافی ارسال نمی‌شود!
            </p>
        </div>
    </div>
</div>