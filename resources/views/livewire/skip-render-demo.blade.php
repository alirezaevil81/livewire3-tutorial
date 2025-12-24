<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->skipRender() درست استفاده شود</h2>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-6xl font-extrabold text-teal-800">{{ $count }}</p>

            <div class="space-x-8">
                <button wire:click="increment"
                        class="px-12 py-6 bg-gradient-to-r from-teal-600 to-cyan-600 text-white text-2xl font-bold rounded-full shadow-2xl transition">
                    +
                </button>

                <button wire:click="decrement"
                        class="px-12 py-6 bg-gradient-to-r from-red-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl transition">
                    -
                </button>
            </div>

            <button wire:click="logAction"
                    class="px-12 py-6 bg-gradient-to-r from-gray-600 to-gray-800 text-white text-xl font-bold rounded-full shadow-2xl transition">
                ثبت عملیات در پس‌زمینه (با skipRender)
            </button>

            <p class="text-lg text-gray-700 mt-6">{{ $log }}</p>

            <p class="text-lg text-gray-600 mt-8">
                + و - کار می‌کنند چون skipRender ندارند.<br>
                دکمه "ثبت عملیات" فقط لاگ را تغییر می‌دهد و UI را آپدیت نمی‌کند (skipRender مجاز است).
            </p>
        </div>
    </div>
</div>