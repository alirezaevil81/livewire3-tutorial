<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:dirty در عمل</h2>
            <p class="text-2xl text-purple-100">تشخیص تغییرات کثیف</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <!-- فیلد با wire:dirty -->
            <input type="text" wire:model="text"
                   class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-400 transition shadow-inner">

            <p class="text-2xl font-bold text-gray-800">
                متن فعلی: {{ $text }}
                <span wire:dirty class="text-red-600 text-3xl ml-2">*</span>
            </p>

            <button wire:click="save"
                    class="px-10 py-6 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition">
                ذخیره
            </button>

            <p class="text-lg text-gray-600 mt-8">
                متن را تغییر دهید → علامت * ظاهر می‌شود (تغییر کثیف).<br>
                ذخیره کنید → * ناپدید می‌شود.
            </p>
        </div>
    </div>
</div>