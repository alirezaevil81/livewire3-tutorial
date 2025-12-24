<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:prevent در عمل</h2>
            <p class="text-2xl text-purple-100">جلوگیری از سابمیت پیش‌فرض فرم</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $result }}</p>

            <!-- فرم با wire:prevent -->
            <form wire:submit.prevent="submitForm">
                <input type="text" placeholder="چیزی وارد کنید" class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-400 transition shadow-inner mb-6">

                <button type="submit"
                        class="px-10 py-6 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition">
                    سابمیت فرم (بدون رفرش)
                </button>
            </form>

            <p class="text-lg text-gray-600 mt-8">
                در فرم چیزی بنویسید و سابمیت کنید → صفحه رفرش نمی‌شود (چون wire:prevent جلوی رفتار پیش‌فرض را می‌گیرد).
            </p>
        </div>
    </div>
</div>