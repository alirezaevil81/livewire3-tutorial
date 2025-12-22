<div class="max-w-6xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-orange-600 to-red-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">انیمیشن‌های لایووایر</h2>
            <p class="text-2xl text-orange-100">wire:transition در عمل (فقط برای عناصر شرطی)</p>
        </div>

        <div class="p-10 space-y-16">
            <!-- بخش ۱: لیست دینامیک (بدون انیمیشن – چون پشتیبانی نمی‌شود) -->
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">لیست دینامیک (انیمیشن لیست پشتیبانی نمی‌شود)</h3>

                <div class="flex justify-center gap-4 mb-10">
                    <input type="text" wire:model="newItem"
                           placeholder="آیتم جدید..."
                           class="px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-orange-400 transition shadow-inner">

                    <button wire:click="addItem"
                            class="px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 text-white font-bold rounded-xl shadow-lg hover:from-orange-700 hover:to-red-700 transition">
                        اضافه کن
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($items as $index => $item)
                        <div wire:key="item-{{ $index }}"
                             class="bg-gradient-to-br from-orange-100 to-red-100 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition transform hover:scale-105">
                            <p class="text-2xl font-semibold text-gray-800 mb-6">{{ $item }}</p>
                            <button wire:click="removeItem({{ $index }})"
                                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold transition">
                                حذف
                            </button>
                        </div>
                    @endforeach
                </div>

                <p class="mt-6 text-red-600 font-bold">توجه: انیمیشن اضافه/حذف آیتم در لیست در لایووایر ۳ پشتیبانی نمی‌شود.</p>
            </div>

            <!-- بخش ۲: نمایش/مخفی کردن کارت با fade + scale (کار می‌کند) -->
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">کارت با fade + scale</h3>

                <button wire:click="$toggle('showCard')"
                        class="px-12 py-6 bg-gradient-to-r from-teal-600 to-cyan-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-teal-700 hover:to-cyan-700 transition">
                    {{ $showCard ? 'مخفی کن' : 'نمایش کارت' }}
                </button>

                @if ($showCard)
                    <div wire:transition.duration.700ms
                         class="mt-10 bg-gradient-to-br from-teal-100 to-cyan-100 p-12 rounded-3xl shadow-2xl">
                        <h4 class="text-4xl font-bold text-teal-800 mb-6">این کارت با انیمیشن fade + scale ظاهر شد!</h4>
                        <p class="text-xl text-gray-700">انیمیشن پیش‌فرض لایووایر (opacity + scale).</p>
                    </div>
                @endif
            </div>

            <!-- بخش ۳: Toggle با opacity فقط (کار می‌کند) -->
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Toggle با fade فقط</h3>

                <button wire:click="$toggle('toggle')"
                        class="px-12 py-6 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition">
                    تغییر وضعیت
                </button>

                @if ($toggle)
                    <div wire:transition.opacity.duration.1000ms
                         class="mt-10 text-8xl">
                        🔓 باز
                    </div>
                @else
                    <div wire:transition.opacity.duration.1000ms
                         class="mt-10 text-8xl">
                        🔒 بسته
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>