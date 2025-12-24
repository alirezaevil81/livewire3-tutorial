<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-cyan-600 to-blue-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:model.blur در عمل</h2>
            <p class="text-2xl text-cyan-100">آپدیت فقط هنگام خروج از فیلد</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $message }}</p>

            <!-- فیلد با blur -->
            <input type="text" wire:model.blur="username"
                   placeholder="نام کاربری را وارد کنید و خارج شوید"
                   class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-cyan-400 transition shadow-inner">

            <p class="text-lg text-gray-600 mt-8">
                در فیلد تایپ کنید → هیچ اتفاقی نمی‌افتد.<br>
                از فیلد خارج شوید (کلیک بیرون یا Tab) → پیام آپدیت می‌شود.
            </p>
        </div>
    </div>
</div>