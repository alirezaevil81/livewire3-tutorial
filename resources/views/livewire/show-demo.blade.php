<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-cyan-600 to-blue-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:show در عمل</h2>
            <p class="text-2xl text-cyan-100">نمایش/مخفی کردن شرطی با CSS</p>
        </div>

        <div class="p-10 space-y-10">
            <!-- چک‌باکس -->
            <div class="text-center">
                <label class="inline-flex items-center text-2xl cursor-pointer">
                    <input type="checkbox" wire:model.live="showAdvanced"
                           class="w-10 h-10 text-cyan-600 rounded focus:ring-cyan-500">
                    <span class="mr-6">نمایش تنظیمات پیشرفته</span>
                </label>
            </div>

            <!-- بخش پیشرفته با wire:show -->
            <div wire:show="showAdvanced"
                 class="p-10 bg-cyan-50 rounded-2xl shadow-lg transition-all duration-500">
                <p class="text-3xl font-bold text-cyan-800 text-center mb-6">
                    تنظیمات پیشرفته
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="text" placeholder="گزینه ۱" class="px-6 py-4 text-lg border border-cyan-300 rounded-xl">
                    <input type="text" placeholder="گزینه ۲" class="px-6 py-4 text-lg border border-cyan-300 rounded-xl">
                    <input type="text" placeholder="گزینه ۳" class="px-6 py-4 text-lg border border-cyan-300 rounded-xl">
                    <input type="text" placeholder="گزینه ۴" class="px-6 py-4 text-lg border border-cyan-300 rounded-xl">
                </div>
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                چک‌باکس را تیک بزنید → بخش پیشرفته با انیمیشن ظاهر می‌شود.<br>
                تیک را بردارید → بخش مخفی می‌شود (اما از DOM حذف نمی‌شود).
            </p>
        </div>
    </div>
</div>