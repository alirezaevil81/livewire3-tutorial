<div class="p-8 max-w-lg mx-auto bg-white rounded-xl shadow-md space-y-4 border border-gray-100">
    <div class="text-center">
        <h2 class="text-xl font-bold text-gray-800">تست قابلیت Stream</h2>
        <p class="text-sm text-gray-500">روی دکمه زیر کلیک کنید تا جادو را ببینید!</p>
    </div>

    <div class="min-h-[100px] p-4 bg-gray-50 rounded-lg border border-dashed border-gray-300 text-gray-700 leading-relaxed">
        <span wire:stream="output">
            </span>
    </div>

    <div class="flex justify-center">
        <button
                wire:click="generate"
                class="px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-300 ease-in-out flex items-center shadow-lg"
        >
            <span wire:loading.remove wire:target="generate">شروع تولید متن</span>
            <span wire:loading wire:target="generate" class="flex items-center">
                در حال پردازش...
            </span>
        </button>
    </div>
</div>