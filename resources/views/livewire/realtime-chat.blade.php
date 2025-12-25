<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-linear-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">چت Realtime با Broadcasting</h2>
            <p class="text-2xl text-green-100">پیام‌ها به صورت زنده برای همه نمایش داده می‌شوند</p>
        </div>

        <div class="p-10 space-y-10">
            <!-- لیست پیام‌ها -->
            <div class="space-y-4 max-h-96 overflow-y-auto">
                @foreach ($messages as $msg)
                    <div class="bg-green-50 p-4 rounded-xl text-right">
                        <p class="text-lg font-medium text-gray-800">{{ $msg }}</p>
                    </div>
                @endforeach
            </div>

            <!-- فرم ارسال -->
            <div class="flex gap-4">
                <input type="text" wire:model.live="newMessage"
                       placeholder="پیام خود را بنویسید..."
                       class="flex-1 px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">

                <button wire:click="sendMessage"
                        class="px-8 py-4 bg-linear-to-r from-green-600 to-teal-600 text-white font-bold rounded-xl shadow-lg hover:from-green-700 hover:to-teal-700 transition">
                    ارسال
                </button>
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                دو تب باز کنید → در یکی پیام بفرستید → در تب دیگر به صورت زنده ظاهر می‌شود!<br>
                (برای تست محلی از driver log استفاده شده – در production از Pusher یا Laravel WebSockets استفاده کن)
            </p>
        </div>
    </div>
</div>