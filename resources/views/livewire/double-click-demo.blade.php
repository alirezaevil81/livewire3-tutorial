<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-linear-to-r from-purple-600 to-indigo-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">Custom Directive: wire:click.double</h2>
            <p class="text-2xl text-purple-100">اجرای متد فقط با دوبار کلیک</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $message }}</p>

            <button wire:click.double="doubleClicked"
                    class="px-12 py-6 bg-linear-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition">
                دو بار کلیک کن!
            </button>

            <p class="text-lg text-gray-600 mt-8">
                یک بار کلیک → هیچ اتفاقی نمی‌افتد.<br>
                دو بار سریع کلیک → پیام تغییر می‌کند.
            </p>
        </div>
    </div>
</div>