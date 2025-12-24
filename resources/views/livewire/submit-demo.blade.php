<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-300">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:submit در عمل</h2>
            <p class="text-2xl text-blue-100">سابمیت فرم بدون رفرش صفحه</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $message }}</p>

            <!-- فرم با wire:submit -->
            <form wire:submit="submit">
                <input type="email" wire:model="email"
                       placeholder="ایمیل را وارد کنید"
                       class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-400 transition shadow-inner mb-6">

                @error('email')
                <p class="text-red-600 text-xl mb-6">{{ $message }}</p>
                @enderror

                <button type="submit"
                        class="px-10 py-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition">
                    سابمیت فرم
                </button>
            </form>

            <p class="text-lg text-gray-600 mt-8">
                ایمیل وارد کنید و سابمیت کنید → فرم بدون رفرش کار می‌کند.
            </p>
        </div>
    </div>
</div>