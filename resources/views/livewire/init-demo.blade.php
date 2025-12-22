<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:init در عمل</h2>
            <p class="text-2xl text-teal-100">اجرای کد فقط هنگام اولین لود کامپوننت</p>
        </div>

        <div class="p-10 text-center space-y-8">
            <!-- پیام از PHP -->
            <div class="text-3xl font-bold text-gray-800">
                {{ $message }}
            </div>

            <!-- پیام از JS (با dispatch) -->
            <div id="js-message" class="text-2xl text-green-600 hidden">
                این پیام با جاوااسکریپت نمایش داده شد!
            </div>

            <!-- دکمه برای تست آپدیت (تا ببینیم wire:init دوباره اجرا نمی‌شود) -->
            <button wire:click="$refresh"
                    class="px-12 py-6 bg-gradient-to-r from-gray-600 to-gray-800 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-gray-700 hover:to-gray-900 transition">
                رفرش کامپوننت (wire:init دوباره اجرا نمی‌شود)
            </button>

            <p class="text-lg text-gray-600 mt-8">
                صفحه را رفرش کنید → پیام ظاهر می‌شود.<br>
                روی دکمه رفرش کلیک کنید → پیام تغییر نمی‌کند (چون wire:init فقط یک بار اجرا می‌شود).
            </p>
        </div>
    </div>
    <!-- اجرای JS با wire:init -->
    <div wire:init="showWelcome"></div>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('welcome-shown', () => {
                document.getElementById('js-message').classList.remove('hidden');
            });
        });
    </script>
</div>

