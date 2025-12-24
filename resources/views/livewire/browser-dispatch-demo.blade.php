<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">$this->dispatch() به مرورگر</h2>
            <p class="text-2xl text-green-100">ارسال event از PHP به JS</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $status }}</p>

            <div class="space-x-8">
                <button wire:click="sendToast"
                        class="px-12 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition">
                    ارسال Toast
                </button>

                <button wire:click="changeTitle"
                        class="px-12 py-6 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition">
                    تغییر عنوان صفحه
                </button>
            </div>

            <!-- Toast container -->
            <div id="toast" class="fixed bottom-8 right-8 hidden">
                <div class="bg-green-600 text-white px-8 py-6 rounded-2xl shadow-2xl text-2xl font-bold animate-slide-in">
                    <span id="toast-message"></span>
                </div>
            </div>

            <p class="text-lg text-gray-600 mt-8">
                روی دکمه‌ها کلیک کنید → event از PHP به JS ارسال می‌شود.
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('toast', (event) => {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').textContent = event.message;
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 4000);
        });

        Livewire.on('change-title', (event) => {
            document.title = event.newTitle;
        });
    });

    // انیمیشن ساده
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slide-in {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .animate-slide-in { animation: slide-in 0.5s ease-out; }
    `;
    document.head.appendChild(style);
</script>