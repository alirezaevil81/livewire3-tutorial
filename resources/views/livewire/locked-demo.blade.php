<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-red-600 to-orange-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">#[Locked] در عمل</h2>
            <p class="text-2xl text-red-100">جلوگیری از تغییر از کلاینت</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">
                نقش کاربر: <span class="text-red-600">{{ $role }}</span>
            </p>

            <p class="text-xl text-gray-700">
                نام کاربر (قابل تغییر از کلاینت):
            </p>
            <input type="text" wire:model.live="name"
                   placeholder="نام را وارد کنید"
                   class="px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-red-400 transition shadow-inner">

            <div class="space-x-8 mt-8">
                <button wire:click="changeRole"
                        class="px-12 py-6 bg-gradient-to-r from-red-600 to-orange-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-red-700 hover:to-orange-700 transition">
                    تغییر نقش از سرور (به super-admin)
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                • نقش فقط از سرور تغییر می‌کند (#[Locked]).<br>
                • اگر با DevTools سعی کنید role را تغییر دهید، لایووایر قبول نمی‌کند.
            </p>
        </div>
    </div>
</div>