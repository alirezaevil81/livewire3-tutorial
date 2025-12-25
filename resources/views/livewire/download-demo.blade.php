<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-linear-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->download() در عمل</h2>
            <p class="text-2xl text-green-100">دانلود فایل از داخل کامپوننت</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-2xl font-bold text-gray-800">
                فایل‌های نمونه آماده دانلود
            </p>

            <div class="space-x-8">
                <button wire:click="downloadTextFile"
                        class="px-12 py-6 bg-linear-to-r from-blue-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-blue-700 hover:to-indigo-700 transition">
                    دانلود فایل متنی (.txt)
                </button>

                <button wire:click="downloadJsonFile"
                        class="px-12 py-6 bg-linear-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    دانلود فایل JSON
                </button>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه‌ها کلیک کنید → فایل مستقیماً دانلود می‌شود.<br>
                فایل‌ها در لحظه ساخته می‌شوند – نیازی به ذخیره روی سرور نیست!
            </p>
        </div>
    </div>
</div>