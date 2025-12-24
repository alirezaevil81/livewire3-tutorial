<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->redirect() در عمل</h2>
            <p class="text-2xl text-purple-100">ریدایرکت از داخل کامپوننت</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <div class="space-x-8">
                <button wire:click="goToDashboard"
                        class="px-12 py-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition">
                    برو به داشبورد (URL مستقیم)
                </button>

                <button wire:click="goToProfile"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    برو به پروفایل (با route name)
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه‌ها کلیک کنید → به صفحه دیگری ریدایرکت می‌شوید.<br>
                همه چیز از داخل کامپوننت لایووایر انجام می‌شود!
            </p>
        </div>
    </div>
</div>