<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:key در عمل</h2>
            <p class="text-2xl text-teal-100">مدیریت درست آیتم‌ها در لیست</p>
        </div>

        <div class="p-10 space-y-10">
            <!-- فرم اضافه کردن آیتم -->
            <div class="flex gap-4 justify-center">
                <input type="text" wire:model="newName"
                       placeholder="نام آیتم جدید"
                       class="px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 transition shadow-inner">

                <button wire:click="add"
                        class="px-8 py-4 bg-gradient-to-r from-teal-600 to-cyan-600 text-white font-bold rounded-xl shadow-lg hover:from-teal-700 hover:to-cyan-700 transition">
                    اضافه کن
                </button>
            </div>

            <!-- لیست آیتم‌ها با wire:key -->
            <div class="space-y-4">
                @foreach ($items as $item)
                    <div wire:key="item-{{ $item['id'] }}"
                         class="flex items-center justify-between bg-teal-50 p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <p class="text-2xl font-semibold text-gray-800">{{ $item['name'] }}</p>
                        <button wire:click="remove({{ $item['id'] }})"
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold transition">
                            حذف
                        </button>
                    </div>
                @endforeach
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                آیتم اضافه یا حذف کنید → فقط همان آیتم آپدیت می‌شود (به خاطر wire:key).<br>
                بدون wire:key ممکن بود همه لیست خراب شود!
            </p>
        </div>
    </div>
</div>